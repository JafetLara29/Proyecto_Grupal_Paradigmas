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
   
<form method="post" action="../Bussiness/useraction.php" >
    <?php
        $userBussiness = new UserBussiness();
        if(isset($_GET['data'])){
    ?>
            <input type="text" readonly required name="id" value="<?php echo $_GET['id'] ?>">
            <input type="text" readonly required name="documentID" value="<?php echo $_GET['document'] ?>">
            <input type="text" required name="name" value="<?php echo $_GET['name'] ?>">
            <input type="text" required name="lastName" value="<?php echo $_GET['lastname'] ?>"><br>
            <input type="text" required name="address" value="<?php echo $_GET['address'] ?>">
            <input type="text" requiredname="phone" value="<?php echo $_GET['phone'] ?>">
            <input type="text" required name="email" value="<?php echo $_GET['email'] ?>">
            <input type="text" required name="iban" value="<?php echo $_GET['iban'] ?>">

            <input type="hidden" name="action" value="update">
            <input type="hidden" name="active" value="1">
            <br>
            <input type="submit" value="Edit">    
    <?php  
        }else{
    ?>
        <input type="hidden" required name="id" value="<?php $userBussiness->countID() ?>">
        <input type="text" required name="documentID" placeholder="Identification document">
        <input type="text" required name="name" placeholder="Name">
        <input type="text" required name="lastName" placeholder="Last Name">
        <input type="text" required name="address" placeholder="Address"><br>
        <input type="text" required name="phone" placeholder="Phone">
        <input type="text" required name="email" placeholder="Email">
        <input type="text" required name="iban" placeholder="IBAN">

        <input type="hidden" name="action" value="save">
        <input type="hidden" name="active" value="1">
        <br>
        <input type="submit" value="Register User">
    <?php
        }
    ?>
</form>

<br>
<br>


<table border="1px" >
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
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
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
                    

                    <td>
                        <!-- <a method="post" href="../Bussiness/useraction.php?action=edit">Editar</a> -->
                        <form method="post" action="../Bussiness/useraction.php">

                            <input type="hidden" name="id" placeholder="ID" value="<?php echo $user->id ?>">
                            <input type="hidden" name="documentID" placeholder="Identification document" value="<?php echo $user->documentID ?>">
                            <input type="hidden" name="name" placeholder="Name" value="<?php echo $user->name ?>">
                            <input type="hidden" name="lastName" placeholder="Last Name" value="<?php echo $user->lastName ?>"> <br>
                            <input type="hidden" name="address" placeholder="Address" value="<?php echo $user->address ?>">
                            <input type="hidden" name="phone" placeholder="Phone" value="<?php echo $user->phone ?>">
                            <input type="hidden" name="email" placeholder="Email" value="<?php echo $user->email ?>">
                            <input type="hidden" name="iban" placeholder="IBAN" value="<?php echo $user->iban ?>">

                            <input type="hidden" name="active" value="<?php echo $user->active ?>">

                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="submit" value="Edit">
                            
                        </form>
                        <form method="post" action="../Bussiness/useraction.php">
                            <input type="hidden" name="id" placeholder="ID" value="<?php echo $user->id ?>">
                            <input type="hidden" name="action" value="delete">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>
