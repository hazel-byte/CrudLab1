<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
       <style>
           th,td, h1{
               text-align:center;
           }
           .add{
               position: relative;
               top:0;
               margin-top: 20px;
               margin-left: 87%;
               width: 150px;
               height: 40px;
           }
           .cat{
               position: absolute;
               top:0 ;
               margin-top: 20px;
               width: 150px;
               height: 40px;
           }
           li{
               list-style-type: none;
           }
       </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2> </h2>
                <form action="/save" method="post">
                    <div class="form-group">
                        <label for="ProductName">Product Name:</label>
                        <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                        <input type="text" class="form-control" name="ProductName" placeholder="Enter Product Name"
                            value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
                    </div>

                    <div class="form-group">
                    <label for="ProductDescription">Description:</label>
                    <select class="form-control" name="ProductDescription">
                        <option value="Male" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Condiments') ? 'selected' : '' ?>>Condiments</option>
                        <option value="Female" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Drinks') ? 'selected' : '' ?>>Drinks</option>
                        <option value="Other" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Other') ? 'selected' : '' ?>>Other</option>
                    </select>
                    </div>


                    <div class="form-group">
                        <label for="ProductCategory">Category:</label>
                        <input type="text" class="form-control" name="ProductCategory" placeholder="Enter Category"
                            value="<?= isset($pro['ProductCategory']) ? $pro['ProductCategory'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="ProductQuantity">Quantity:</label>
                        <input type="text" class="form-control" name="ProductQuantity" placeholder="Enter Quantity"
                            value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="ProductPrice">Price:</label>
                        <input type="text" class="form-control" name="ProductPrice" placeholder="Enter Price"
                            value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2> </h2>
                <table class="table table-bordered">
                    <thead class="thead-primary">
                        <tr>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Category</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Delete/Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $pr): ?>
                            <tr>
                                <td><?= $pr['ProductName'] ?></td>
                                <td><?= $pr['ProductDescription'] ?></td>
                                <td><?= $pr['ProductCategory'] ?></td>
                                <td><?= $pr['ProductQuantity'] ?></td>
                                <td><?= $pr['ProductPrice'] ?></td>
                                <td>
                                    <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
