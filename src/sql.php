<?php

function addProducto(string $producto, int $cantidad,int $proveedor,int $aviso): bool
{
        $sql = 'INSERT INTO almacen(producto, cantidad, proveedor, aviso)
        VALUES(:producto, :cantidad, :proveedor, :aviso)';

        $statement = db()->prepare($sql);

        $statement->bindValue(':producto', $producto, PDO::PARAM_STR);
        $statement->bindValue(':cantidad', $cantidad, PDO::PARAM_INT);
        $statement->bindValue(':proveedor', $proveedor ,PDO::PARAM_INT);
        $statement->bindValue(':aviso', $aviso, PDO::PARAM_INT);


return $statement->execute();
        
}

function addProveedor(string $proveedor, string $correo,int $telefono): bool
{
        $sql = 'INSERT INTO proveedores(proveedor, correo, telefono)
        VALUES(:proveedor, :correo, :telefono)';

        $statement = db()->prepare($sql);

        $statement->bindValue(':proveedor', $proveedor, PDO::PARAM_STR);
        $statement->bindValue(':correo', $correo, PDO::PARAM_STR);
        $statement->bindValue(':telefono', $telefono ,PDO::PARAM_INT);


return $statement->execute();
        
}

function updateProducto(int $producto, int $cantidad,int $aviso): bool
{
        $sql = 'UPDATE almacen SET cantidad=:cantidad, aviso=:aviso
        WHERE id=:producto';

        $statement = db()->prepare($sql);

        $statement->bindValue(':producto', $producto, PDO::PARAM_STR);
        $statement->bindValue(':cantidad', $cantidad, PDO::PARAM_INT);
        $statement->bindValue(':aviso', $aviso, PDO::PARAM_INT);


return $statement->execute();
        
}






?>