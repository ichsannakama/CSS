<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Add product</title>
    <script src="scripts/jquery-3.3.1.min.js"></script>
</head>

<?PHP
    require_once("./include/global_config.php");

    if (isset($_POST['submitted'])) {

        if ($bsmmembersite->AddProduct()) {
        ?>
            <script type="text/javascript">
                $(document).ready( function () {
                    alert('Produk berhasil ditambahkan');
                    $('input[type=text], textarea').val(null)
                })
            </script>
        <?
            // Redirect to success page
            // $bsmmembersite->RedirectToURL("product-add.php");
        }
    }
?>

<body>
    <h1>Add Product</h1>
    <div><span class='error'><?php echo $bsmmembersite->GetErrorMessage(); ?></span></div>
    <form id='addproduct' action='<?php echo $bsmmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <table>
            <tr>
                <td><label for="name">Nama</label></td>
                <td><input type="text" id='name' name='name' value='<?php echo $bsmmembersite->SafeDisplay('name') ?>'></td>
            </tr>
            <tr>
                <td><label for="desc">Keterangan</label></td>
                <td>
                    <textarea name="desc" id="desc" cols="30" rows="10" value='<?php echo $bsmmembersite->SafeDisplay('desc') ?>'></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="stock">Stock</label></td>
                <td><input type="text" id='stock' name='stock' value='<?php echo $bsmmembersite->SafeDisplay('stock') ?>'></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="SUBMIT" class="btn-login">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>