<!-- Aqui van los metodos usando la conexion creada en data -->
<?php
include_once 'data.php';
include '../Domain/user.php';

    class UserData{

        public static function consult(){
            $usersList = [];
            $conexionDB = Data::createInstance();
            $sql = $conexionDB->query("SELECT * FROM tbusers where tbusersactive=1");
            foreach($sql->fetchAll() as $user){

                $usersList[] = new User($user['tbusersid'],$user['tbusersidentificationdocument'], $user['tbusersname'], $user['tbuserslastname'], $user['tbusersaddress'], $user['tbusersphonenumber'], $user['tbusersemail'], $user['tbusersibanaccount'], $user['tbusersactive']);
                
            }
            // print_r($usersList);
            return $usersList;

        }

        public static function countID(){
            $conection = Data::createInstance();

            $sql = $conection->query("SELECT * FROM tbusers");
            $accountand = 0;
            foreach($sql->fetchAll() as $user){
                $accountand++;
            }
            $accountand++;
            print_r($accountand);
            return $accountand;
        }

        public static function save($user){
            $conection = Data::createInstance();
            
            $sql = $conection -> prepare("INSERT INTO tbusers(tbusersid, tbusersidentificationdocument, tbusersname, tbuserslastname, tbusersaddress, tbusersphonenumber, tbusersemail, tbusersibanaccount, tbusersactive) VALUES (?,?,?,?,?,?,?,?,?)");
            
            $sql -> execute(array($user->getID(), $user->getDocumentID(), $user->getName(), $user->getLastName(), $user->getAddress(), $user->getPhone(), $user->getEmail(), $user->getIBAN(), $user->getActive() ));

        }

        // public static function delete($id){
        //     $conection = Data::createInstance();

        //     $sql = $conection -> prepare("DELETE FROM tbemployees WHERE id = ?");
        //     $sql -> execute(array($id));
        // }

        // public static function search($id){
        //     $conection = Data::createInstance();

        //     $sql = $conection -> prepare("Select * FROM tbemployees WHERE id = ?");
        //     $sql -> execute(array($id));

        //     $employee = $sql->fetch();

        //     return new Employee($employee['id'], $employee['name'], $employee['email']);
        // }

        public static function _edit($user){
            $conection = Data::createInstance();

            $sql = $conection -> prepare("UPDATE tbusers SET tbusersidentificationdocument=?, tbusersname=?, tbuserslastname=?, tbusersaddress=?, tbusersphonenumber=?, tbusersemail=?, tbusersibanaccount=?, tbusersactive=? WHERE tbusersid=?");
            $sql -> execute(array($user->getDocumentID(), $user->getName(), $user->getLastName(), $user->getAddress(), $user->getPhone(), $user->getEmail(), $user->getIBAN(), $user->getActive(), $user->getID()));
            echo "Se realizaron los cambios deseados";
        }

        public static function delete($id, $active){
            $conection = Data::createInstance();

            $sql = $conection -> prepare("UPDATE tbusers SET tbusersactive=? WHERE tbusersid=?");
            $sql -> execute(array($active, $id));
            echo "Se realizaron los cambios deseados";
        }

    }
?>
