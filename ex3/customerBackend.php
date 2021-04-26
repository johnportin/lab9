<?php
    echo "<html>";
    echo "<head> <link rel='stylesheet' href='style.css'> </head>";
    echo "<body>";
    echo "<h1>Thanks for your order!</h1>";
    echo "<h3>Credentials:</h3>";
    echo "<p>Welcome " . $_POST['username'] . "</p>";
    echo "<p>Your password is: " . $_POST['password'] . "</p><br>";

    $banana = $_POST['banana'];
    $bananaPrice = 0.25;
    $bananaTotal = $bananaPrice * $banana;

    $dinosaur = $_POST['dinosaur'];
    $dinosaurPrice = 400000;
    $dinosaurTotal = $dinosaurPrice * $dinosaur;

    $puzzle = $_POST['puzzle'];
    $puzzlePrice = 53;
    $puzzleTotal = $puzzle * $puzzlePrice;

    
    
    
    $shippingMethod = $_POST['shipping'];
    $shippingPrice = -1;
    if ($shippingMethod == 'free') {
        $shippingPrice = 0;
    } elseif ($shippingMethod == 'overnight') {
        $shippingPrice = 50;
    } elseif ($shippingMethod == 'three day') {
        $shippingPrice = 5;
    };
    
    $total =  $bananaTotal + $puzzleTotal + $dinosaurTotal + $shippingPrice;

    echo "<h3>Receipt: </h3>";
    
    echo "<table>
    <tr>
    <th></th>
            <th>Quantity</th>
            <th>Cost Per Item</th>
            <th>Sub Total</th>
        </tr>

        <tr>
            <th>Bananas</th>
            <td>" . $banana ."</td>
            <td>$" . $bananaPrice . "</td>
            <td>$" . $bananaTotal . "</td>
        </tr>
        
        <tr>
        <th>Dinosaurs</th>
        <td>" . $dinosaur . "</td>
        <td>$" . $dinosaurPrice . "</td>
        <td>$" . $dinosaurTotal . "</td>
        </tr>
        <tr>
        <th>Puzzles</th>
        <td>" . $puzzle . "</td>
        <td>$" . $puzzlePrice . "</td>
        <td>$" . $puzzleTotal . "</td>
        </tr>
        <tr>
        <th>Shipping</th>
        <td colspan='2'>" . $shippingMethod . "</td>
        <td>$" . $shippingPrice . "</td>
        </tr>
        <tr>
              <th colspan='3'>Total Cost</th>
              <td><b>$" . $total . "</b></td>
        </tr>
    </table>";

    echo "</body>";
?>