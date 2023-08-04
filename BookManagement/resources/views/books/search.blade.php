<!DOCTYPE html>
<html>
<head>
    <title>Book Management System</title>
</head>
<body>
    <h1>Search Books By Name</h1>
    <form action="{{ route('books.search') }}" method="GET">
        <input type="text" name="search" value="{{ $searchTerm ?? '' }}" placeholder="Enter book name">
        <button type="submit">Search</button>
    </form>
</body>
</html>
