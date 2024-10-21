<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDExample</title>
</head>

<body>
    <h1>Estructura basica</h1>
    <?php
    /*
            Function: suma
            Suma dos números

            Parameters:
                a - Primer número
                b - Segundo número
            
            Returns:
                El resultado de la suma
            
            See Also:
                <resta>
        */
    function suma($a, $b)
    {
        return $a + $b;
    }
    ?>
    <script>
        /*
            Function: resta
            Resta dos números

            Parameters:
                a - Primer número
                b - Segundo número
            
            Returns:
                El resultado de la resta
            
            See Also:
               <suma>
        */
        function resta(a, b) {
            return a - b;
        }
    </script>
</body>

</html>