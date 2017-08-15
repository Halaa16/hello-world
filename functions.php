// useful php functions

- implode(', ', $row) /* 1 arg - delimeter, 2 - array.   It makes a string by combining all the values in an array,
putting a string delimiter between each value */

- /* Use the query() method to retrieve information from the database. Pass it an SQL
query for the database. It returns a PDOStatement object that provides access to the
retrieved rows. Each time you call the fetch() method of this object, you get the next
row returned from the query. When there are no more rows left, fetch() returns a
value that evaluates to false */

$q = $db->query('SELECT dish_name, price FROM dishes');
while ($row = $q->fetch()) {
    print "$row[dish_name], $row[price] \n";
}
