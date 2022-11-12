<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">gender</th>
            <th scope="col">Date Added</th>
        </tr>
    </thead>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "form";
    $con = new mysqli($host, $user, $pass, $db);
    if (!$con) {
        echo "there are some problem while connecting the database";
    }
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    $results_per_page = 10;
    $page_first_result = ($page - 1) * $results_per_page;
    $query = "SELECT * FROM `random`";
    $result = mysqli_query($con, $query);
    $number_of_result = mysqli_num_rows($result);

    //determine the total number of pages available  
    $number_of_page = ceil($number_of_result / $results_per_page);
    $query = "SELECT *FROM `random` LIMIT " . $page_first_result . ',' . $results_per_page;
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] . "@gmail.com"; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
        </tbody>
    <?php } ?>
    </table>
    <?php
for($page = 1; $page<= $number_of_page; $page++) {  
    echo '<a href = "table.php?page=' . $page . '">' . $page . ' </a>'; 
} 
    ?>