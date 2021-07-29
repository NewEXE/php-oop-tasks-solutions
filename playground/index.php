<pre>
<?php
/*
 * For code testing
 */

class User
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

$user1 = new User('Иван');
$user2 = new User('Пётр');
$user3 = new User('Инокентий');

$arr = [$user1, $user2, $user3];

setNameToFirstItem($arr, 'Степан');

var_dump($arr);

function setNameToFirstItem(array $arr, string $name)
{
    $arr[0]->name = $name;
}

?>
</pre>
