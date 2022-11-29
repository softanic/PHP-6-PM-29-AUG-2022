<?php
include 'db.php';
$q="select * from news";
$res=mysqli_query($conn,$q);
echo "<a href='news-add.php'>Add news</a>";
echo "<table border=1>";
echo "<tr><th>News Id</th><th>title</th><th>date</th><th>city</th><th>reporter</th><th>Type</th><th>Action</th></tr>";
while($row=mysqli_fetch_array($res))
{
	echo "<tr>";
	echo "<td>{$row['news_id']}</td>";
	echo "<td>{$row['title']}</td>";
	echo "<td>{$row['date']}</td>";
	echo "<td>{$row['city']}</td>";
	echo "<td>{$row['reporter']}</td>";
	echo "<td>{$row['type']}</td>";	
	echo "<td><a href=''>Edit</a> | <a href='delete-news.php?id={$row['news_id']}'>Delete</a></td>";	
	echo "</tr>";
}
echo "</table>";

?>