<html>
<link rel="stylesheet" href="../../css/add_item_quantity.css">

<div class="center">

  <div class="input-group">

        <span class="input-group-btn">
              <button id="add-btn" type="button" class="btn btn-success" onclick="add('add-btn', 'minus-btn', 'input-quantity')">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>

      <span class="input-group-btn">
              <button id = "minus-btn" type="button" class="btn btn-danger"  onclick ="minus('add-btn', 'minus-btn', 'input-quantity')">
                <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>

        <input id="input-quantity" type="number" class="form-control input-number" placeholder="1" value="1">

      <span class="input-group-btn">
          <button id="addcart-btn" type="button" class="btn btn-danger" onclick = "addtocart('add-btn', 'minus-btn', 'input-quantity')">Add to cart</button>
      </span>
    </div>

</div>
<script src="../../js/add_item_quantity.js"></script>

</html>

