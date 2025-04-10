<?php
// DB Connection
$conn = new mysqli("localhost", "root", "", "web");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert book info
if (isset($_POST['add'])) {
    $accession = $_POST['accession_no'];
    $title = $_POST['title'];
    $authors = $_POST['authors'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];

    $sql = "INSERT INTO books (accession_no, title, authors, edition, publisher)
            VALUES ('$accession', '$title', '$authors', '$edition', '$publisher')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Book added successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}

// Search for book
$search_result = "";
if (isset($_POST['search'])) {
    $search_title = $_POST['search_title'];
    $sql = "SELECT * FROM books WHERE title LIKE '%$search_title%'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $search_result .= "<h3>Search Results:</h3>";
        $search_result .= "<table border='1' cellpadding='10'><tr>
                            <th>Accession No</th><th>Title</th><th>Authors</th>
                            <th>Edition</th><th>Publisher</th></tr>";
        while($row = $result->fetch_assoc()) {
            $search_result .= "<tr>
                                <td>{$row['accession_no']}</td>
                                <td>{$row['title']}</td>
                                <td>{$row['authors']}</td>
                                <td>{$row['edition']}</td>
                                <td>{$row['publisher']}</td>
                              </tr>";
        }
        $search_result .= "</table>";
    } else {
        $search_result = "<p style='color:red;'>No books found with that title.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Book Management</title>
</head>
<body>
    <h2>Add Book Information</h2>
    <form method="post">
        <label>Accession No:</label><input type="number" name="accession_no" required><br><br>
        <label>Title:</label><input type="text" name="title" required><br><br>
        <label>Authors:</label><input type="text" name="authors" required><br><br>
        <label>Edition:</label><input type="text" name="edition" required><br><br>
        <label>Publisher:</label><input type="text" name="publisher" required><br><br>
        <input type="submit" name="add" value="Add Book">
    </form>

    <hr>

    <h2>Search Book by Title</h2>
    <form method="post">
        <label>Enter Title:</label>
        <input type="text" name="search_title" required>
        <input type="submit" name="search" value="Search">
    </form>

    <br>
    <?php echo $search_result; ?>

</body>
</html>
