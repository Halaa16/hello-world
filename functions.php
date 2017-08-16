// useful php functions
------------------------------------------------------------------------------------------------------------------------------------------
implode(', ', $row) /* 1 arg - delimeter, 2 - array.   It makes a string by combining all the values in an array,
putting a string delimiter between each value */
------------------------------------------------------------------------------------------------------------------------------------------
use exec() to update data in database. With UPDATE, INSERT for example.
------------------------------------------------------------------------------------------------------------------------------

/* Use the query() method to retrieve information from the database. Pass it an SQL
query for the database. It returns a PDOStatement object that provides access to the
retrieved rows. Each time you call the fetch() method of this object, you get the next
row returned from the query. When there are no more rows left, fetch() returns a
value that evaluates to false. To return all use fetchAll(). */

$q = $db->query('SELECT dish_name, price FROM dishes');
while ($row = $q->fetch()) {
    print "$row[dish_name], $row[price] \n";
}

------------------------------------------------------------------------------------------------------------------------------------------

Use the query() method to retrieve information from the database. Pass it an SQL
query for the database. It returns a PDOStatement object that provides access to the
retrieved rows. 
------------------------------------------------------------------------------------------------------------------------------
By submitting a carefully built form input value, a malicious user can inject arbitrary SQL statements into your database program. To prevent this, you need to escape spe‐
cial characters (most importantly, the apostrophe) in SQL queries. PDO provides a helpful feature called prepared statements that makes this a snap.
With prepared statements, you separate your query execution into two steps. First, you give PDO’s prepare() method a version of your query with a ? in the SQL in
each place you want a value to go. This method returns a PDOStatement object. Then,you call execute() on your PDOStatement object, passing it an array of values to be
substituted for the placeholding ? characters. The values are appropriately quoted before they are put into the query, protecting you from SQL injection attacks.
Example 8-26 shows the safe version of the query from Example 8-25.
Example(safe insertion of form data):
$stmt = $db->prepare('INSERT INTO dishes (dish_name) VALUES (?)');
$stmt->execute(array($_POST['new_dish_name']));
-------------------------------------------------------------------------------------------------------------------------------
The list() function is used to assign values to a list of variables in one operation.

$my_array = array("Dog","Cat","Horse");
list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.";
-------------------------------------------------------------------------------------------------------------------------------


-------------------------------------------------------------------------------------------------------------------------------



-------------------------------------------------------------------------------------------------------------------------------




