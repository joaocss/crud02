<?php




switch(@$_REQUEST["acao"]){

    case'cadastrar':
       $nome=$_POST["nome"];
       $email=$_POST["email"];
       $senha=$_POST["senha"];
       $data_nasci=$_POST["data_nasci"];

       $sql = "INSERT INTO usuarios (nome, email, senha, data_nasci) VALUES('{$nome}', '{$email}','{$senha}','{$data_nasci}') ";
       $res = $conn->query($sql);


       if($res==true){
         print "<script>alert('Cadastrado com sucesso');</script>";
         print"<script>location.href='?page=listar';</script>";

      }else{
         print "<script>alert('não foi possivel cadastrar');</script>";
         print"<scriti>location.href='?page=listae';<script>";
      }


        break;
        case 'editar':
            
            $nome=$_POST["nome"];
            $email=$_POST["email"];
            $senha=$_POST["senha"];
            $data_nasci=$_POST["data_nasci"];

            $sql = "UPDATE usuarios SET 
            nome='{$nome}',
            email='{$email}',
            senha='{$senha}',
            data_nasci='{$data_nasci}'
            WHERE
            id=".$_REQUEST["id"];
         $res = $conn ->query($sql);

         if($res==true){
            print "<script>alert('editado com sucesso');</script>";
            print"<script>location.href='?page=listar';</script>";

         }else{
            print "<script>alert('não foi possivel cadastrar');</script>";
            print"<scriti>location.href='?page=listae';<script>";
         }

            break;
            case 'excluir':
               
               $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
               

               $res = $conn ->query($sql);

               if($res==true){
                  print "<script>alert('excluido com sucesso');</script>";
                  print"<script>location.href='?page=listar';</script>";
      
               }else{
                  print "<script>alert('não foi possivel excluir');</script>";
                  print"<scriti>location.href='?page=listae';<script>";
               }
      

                break;


}

?>