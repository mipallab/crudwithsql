<?php


/**
 * Create data
 */

function insertData($pdo, string $table, array $data,)
{
    try {
        // Extract keys and values
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        // Prepare SQL statement
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $pdo->prepare($sql);

        // Execute the statement
        $stmt->execute($data);

        // Return success message
        return [
            "status" => "success",
            "message" => "{$data['dev_name']} inserted successfully"
        ];
    } catch (PDOException $e) {
        // Return error message
        return [
            "status" => "error",
            "message" =>  $e->getMessage()
        ];
    }
}


/**
 * Show all data
 */
function showAllData($table, $pdo, $condition_value, $condition_col = 'id')
{
    try {
        // Prepare SQL query
        $sql = "SELECT * FROM $table WHERE $condition_col = $condition_value";
        $stmt = $pdo->prepare($sql);

        // Execute the query
        $stmt->execute();

        // Fetch all rows
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);


        // Return the data
        return [
            "status" => "success",
            "data" => array_reverse($data)
        ];
    } catch (PDOException $e) {
        // Return error message
        return [
            "status" => "error",
            "message" => $e->getMessage()
        ];
    }
}

/**
 * Update records in a database table.
 *
 * @param string $table The name of the database table.
 * @param array $data An associative array of column-value pairs to update (e.g., ['status' => 1]).
 * @param array $conditions An associative array of conditions (e.g., ['id' => 123]).
 * @param PDO $pdo A PDO instance representing the database connection.
 * @return bool True on success, false on failure.
 */
function updateRecord($pdo, string $table, array $data, array $conditions)
{
    // Build the SET part of the query dynamically
    $setPart = implode(", ", array_map(fn($key) => "$key = :$key", array_keys($data)));

    // Build the WHERE part of the query dynamically
    $wherePart = implode(" AND ", array_map(fn($key) => "$key = :where_$key", array_keys($conditions)));

    // Combine into a full SQL query
    $sql = "UPDATE $table SET $setPart WHERE $wherePart";

    try {
        $stmt = $pdo->prepare($sql);

        // Bind the data values
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        // Bind the condition values
        foreach ($conditions as $key => $value) {
            $stmt->bindValue(":where_$key", $value);
        }

        // Execute the statement
        $stmt->execute();
        return [
            'status' => "success",
            'message' => "Data updated successfully",
            'sql' => $sql,
        ];
    } catch (PDOException $e) {
        // Log the error and return a detailed error response
        error_log("Database update error: " . $e->getMessage());

        return [
            'status' => 'error',
            'message' => 'Failed to update the record',
            'error' => $e->getMessage(),
        ];
    }
}





/**
 *  Single data Fetch
 * @param PDO $pod -> database connection
 * @param string $tableName -> database table name
 * @param string $conditionColumn -> condition column id
 * @param string/integer $conditionValue -> condition value
 */


function fetchSingleData($pdo, $tableName, $conditionColumn, $conditionValue)
{
    try {
        // Prepare the SQL statement with a placeholder
        $sql = "SELECT * FROM $tableName WHERE $conditionColumn = :conditionValue LIMIT 1";
        $stmt = $pdo->prepare($sql);

        // Bind the parameter to the placeholder
        $stmt->bindParam(':conditionValue', $conditionValue, PDO::PARAM_STR);

        // Execute the query
        $stmt->execute();

        // Fetch the single row
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        // Return the result
        return $result ?: [];
    } catch (PDOException $e) {
        // Handle exception
        echo "Error: " . $e->getMessage();
        return false;
    }
}


/**
 * Deletes a record from a specified table based on a condition.
 *
 * @param PDO $pdo The PDO connection object.
 * @param string $table The name of the table.
 * @param string $column The column to match for deletion.
 * @param mixed $value The value to match for deletion.
 * @return bool True if the deletion was successful, otherwise false.
 */
function deleteRecord(PDO $pdo, string $table, string $column, $value): bool
{
    try {
        // Prepare the SQL statement
        $sql = "DELETE FROM $table WHERE $column = :value";
        $stmt = $pdo->prepare($sql);

        // Bind the value
        $stmt->bindValue(':value', $value);

        // Execute the statement
        return $stmt->execute();
    } catch (PDOException $e) {
        // Handle exception (log or display an error message as needed)
        echo "Error: " . $e->getMessage();
        return false;
    }
}
