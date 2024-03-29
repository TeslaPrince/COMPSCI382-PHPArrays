<?php
    $products = [ [
        'type' => 'electronics',
        'name' => 'Audio Technica ATH-M50x',
        'price' => 119.99,
        'quantity' => 2 ],
        [
        'type' => 'electronics',
        'name' => 'Sennheiser HD 202 II',
        'price' => 24.50,
        'quantity' => 5 ],
        [
        'type' => 'electronics',
        'name' => 'GPX HM3817DTBK Micro System',
        'price' => 135.99,
        'quantity' => 1 ],
        [
        'type' => 'electronics',
        'name' => 'Samsung MX-J630 2.0 Channel 230 Watt System',
        'price' => 117.99,
        'quantity' => 4 ],
        [
        'type' => 'electronics',
        'name' => 'M-Audio Bass Traveler',
        'price' => 29.00,
        'quantity' => 9 ],
        [
        'type' => 'electronics',
        'name' => 'HLED Strip light kit',
        'price' => 17.95,
        'quantity' => 5 ],
        [
        'type' => 'movies',
        'name' => 'Spectre',
        'price' => 19.99,
        'quantity' => 0 ],
        [
        'type' => 'movies',
        'name' => 'Finding Dory',
        'price' => 19.99,
        'quantity' => 4 ],

        [
        'type' => 'movies',
        'name' => 'Terminator: Genisys',
        'price' => 14.95,
        'quantity' => 3 ],
        [
        'type' => 'movies',
        'name' => 'Interstellar',
        'price' => 12.00,
        'quantity' => 4 ],
        [
        'type' => 'movies',
        'name' => 'Transformers: Age of Extinction',
        'price' => 9.95,
        'quantity' => 7 ],
        [
        'type' => 'movies',
        'name' => 'Eye in the Sky',
        'price' => 14.95,
        'quantity' => 6 ],
        [ 'type' => 'movies',
        'name' => 'Venom',
        'price' => 22.99,
        'quantity' => 0 ],
        [
        'type' => 'movies',
        'name' => 'The spy who dumped me',
        'price' => 29.00,
        'quantity' => 8 ],
        [
        'type' => 'movies',
        'name' => 'Mamma Mia, Here We Go Again',
        'price' => 22.99,
        'quantity' => 4 ],
        [
        'type' => 'electronics',
        'name' => 'M-Audio Bass Traveler',
        'price' => 29.00,
        'quantity' => 5 ],
        [
        'type' => 'video-games',
        'name' => 'Battlefield 1',
        'price' => 59.99,
        'quantity' => 3 ],
        [
        'type' => 'video-games',
        'name' => 'Overwatch',
        'price' => 40.00,
        'quantity' => 1 ],
        [
        'type' => 'video-games',
        'name' => 'Gears of War 4',
        'price' => 59.99,
        'quantity' => 8 ],
        [
        'type' => 'video-games',
        'name' => 'Titanfall 2',
        'price' => 59.99,
        'quantity' => 7 ],
        [
        'type' => 'video-games',
        'name' => 'Sid Meier\'s Civilization VI ',
        'price' => 59.99,
        'quantity' => 4 ],
        [
        'type' => 'video-games',
        'name' => 'The Sims 4',
        'price' => 39.99,
        'quantity' => 2 ],
        [
        'type' => 'video-games',
        'name' => 'Grand Theft Auto V',
        'price' => 59.99,
        'quantity' => 7 ]
        ];
    echo "<h1>PHP Arrays</h1>";
    echo "<table><tr>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>";
    foreach ($products as $product) {
        $tRow0 = "<tr>";
            $tRow0 .= "<td>".$product["name"]." </td>";
            $tRow0 .= "<td>".$product["type"]."</td>";
            $tRow0 .= "<td>".$product["price"]." </td>";
            $tRow0 .= "<td>".$product["quantity"]." </td>";
         $tRow0 .= "</tr>";
         echo $tRow0;
    }
    echo "</table>";
//------------------------------------------------------------------------------------------
    echo "<h2>Part 1</h2>";
    echo "<table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
        </tr>";
        foreach ($products as $product) {
            $tRow1 = "<tr>";
                $tRow1 .= "<td>".$product["name"]." </td>";
                $tRow1 .= "<td>".$product["type"]."</td>";
                $tRow1 .= "<td>".$product["price"]." </td>";
             $tRow1 .= "</tr>";
             echo $tRow1;
        }
    echo "</table><br>";
//------------------------------------------------------------------------------------------
    echo "<h2>Part 2</h2>";
    echo "<table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
        </tr>";
        foreach ($products as $product) {
            if($product["price"] > 30){
                $tRow2 = "<tr>";
                    $tRow2 .= "<td>".$product["name"]." </td>";
                    $tRow2 .= "<td>".$product["type"]."</td>";
                    $tRow2 .= "<td>".$product["price"]." </td>";
                $tRow2 .= "</tr>";
                echo $tRow2;
            }
        }
    echo "</table><br>";
//------------------------------------------------------------------------------------------
    echo "<h2>Part 3</h2>";
    echo "<table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
        </tr>";
        foreach ($products as $product) {
            if($product["type"] == "electronics" && $product["price"] > 30){
                $tRow = "<tr>";
                    $tRow .= "<td>".$product["name"]." </td>";
                    $tRow .= "<td>".$product["type"]."</td>";
                    $tRow .= "<td>".$product["price"]." </td>";
                $tRow .= "</tr>";
                echo $tRow;
            }
        }
    echo "</table><br>";
//------------------------------------------------------------------------------------------
    echo "<h2>Part 4</h2>";
    echo "<table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Revenue</th>
        </tr>";
        $totalRevenue = 0;
        foreach ($products as $product) {
            $tRow = "<tr>";
                $tRow .= "<td>".$product["name"]." </td>";
                $tRow .= "<td>".$product["price"]."</td>";
                $tRow .= "<td>".$product["quantity"]." </td>";
                $tRow .= "<td>$".($product["price"]*$product["quantity"])." </td>";
                $totalRevenue = $totalRevenue +($product["price"]*$product["quantity"]);
            $tRow .= "</tr>";
            echo $tRow;
        }
        echo "<tr><td></td></tr>
        <tr>
            <td></td>
            <td>Total Revenue:</td>
            <td>$".$totalRevenue."</td>
        </tr>";
    echo "</table><br>";
//------------------------------------------------------------------------------------------
    echo "<h2>Part 5</h2>";
    echo "<table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Revenue</th>
        </tr>";
        foreach ($products as $product) {
            if($product["type"] == "electronics"){
                $tRow = "<tr>";
                    $tRow .= "<td>".$product["name"]." </td>";
                    $tRow .= "<td>".$product["type"]."</td>";
                    $tRow .= "<td>".$product["price"]." </td>";
                    $tRow .= "<td>".$product["quantity"]." </td>";
                    $tRow .= "<td>".($product["price"]*$product["quantity"])." </td>";
                $tRow .= "</tr>";
                echo $tRow;
            }
        }
    echo "</table><br>";
?>