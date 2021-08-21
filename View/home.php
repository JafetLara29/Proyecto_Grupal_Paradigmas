<!-- <a name="" id="" class="btn btn-success" href="?controller=employes&action=create" role="button">Add employee</a> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include '../Bussiness/userbussiness.php';
    ?>
</head>

<body>
    <h1>Users data</h1>
<form method="post" action="../Bussiness/useraction.php">

    <input type="text" name="id" placeholder="ID">
    <input type="text" name="documentID" placeholder="Identification document">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="lastName" placeholder="Last Name"><br>
    <input type="text" name="address" placeholder="Address">
    <input type="text" name="phone" placeholder="Phone">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="iban" placeholder="IBAN">

    <input type="hidden" name="action" value="save">
    <input type="hidden" name="active" value="1">
    <br>
    <input type="submit" value="Register User">
    
</form>

<br>
<br>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Identification Document</th>
            <th>Name</th>
            <th>LastName</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>IBAN Account</th>

        </tr>
    </thead>
    <tbody>
        <?php 
            $userBussiness = new UserBussiness();
            $usersList = $userBussiness -> getUsers();
            foreach($usersList as $user){ ?>
                <tr>
                    <td> <?php echo $user->id ?> </td>
                    <td> <?php echo $user->documentID ?> </td>
                    <td> <?php echo $user->name ?> </td>
                    <td> <?php echo $user->lastName ?> </td>
                    <td> <?php echo $user->address ?> </td>
                    <td> <?php echo $user->phone ?> </td>
                    <td> <?php echo $user->email ?> </td>
                    <td> <?php echo $user->iban ?> </td>
                    
                    <td> <a href="../Bussiness/usersaction.php?action=edit&id=<?php $user->id ?>"></a> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>
