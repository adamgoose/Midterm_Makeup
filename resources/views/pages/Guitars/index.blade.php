<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
    body {
    font-family: "Helvetica Neue", Helvetica, Arial;
    font-size: 14px;
    line-height: 20px;
    font-weight: 400;
    color: #3b3b3b;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
    background: #2b2b2b;
    }
    @media screen and (max-width: 580px) {
    body {
        font-size: 16px;
        line-height: 22px;
    }
    }

    .wrapper {
    margin: 0 auto;
    padding: 40px;
    max-width: 800px;
    }

    .table {
    margin: 0 0 40px 0;
    width: 100%;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    display: table;
    }
    @media screen and (max-width: 580px) {
    .table {
        display: block;
    }
    }

    .row {
    display: table-row;
    background: #f6f6f6;
    }
    .row:nth-of-type(odd) {
    background: #e9e9e9;
    }
    .row.header {
    font-weight: 900;
    color: #ffffff;
    background: #ea6153;
    }
    .row.green {
    background: #27ae60;
    }
    .row.blue {
    background: #2980b9;
    }
    @media screen and (max-width: 580px) {
    .row {
        padding: 14px 0 7px;
        display: block;
    }
    .row.header {
        padding: 0;
        height: 6px;
    }
    .row.header .cell {
        display: none;
    }
    .row .cell {
        margin-bottom: 10px;
    }
    .row .cell:before {
        margin-bottom: 3px;
        content: attr(data-title);
        min-width: 98px;
        font-size: 10px;
        line-height: 10px;
        font-weight: bold;
        text-transform: uppercase;
        color: #969696;
        display: block;
    }
    }

    .cell {
    padding: 6px 12px;
    display: table-cell;
    }
    @media screen and (max-width: 580px) {
    .cell {
        padding: 2px 16px;
        display: block;
    }
    }
</style>

   <div class="table">
    
    <div class="row header green">
      <div class="cell">
        Product
      </div>
      <div class="cell">
        Unit Price
      </div>
      <div class="cell">
        Quantity
      </div>
      <div class="cell">
        Date Sold
      </div>
      <div class="cell">
        Status
      </div>
    </div>
    
    <div class="row">
      <div class="cell" data-title="Product">
        Solid oak work table
      </div>
      <div class="cell" data-title="Unit Price">
        $800
      </div>
      <div class="cell" data-title="Quantity">
        10
      </div>
      <div class="cell" data-title="Date Sold">
        03/15/2014
      </div>
      <div class="cell" data-title="Status">
        Waiting for Pickup
      </div>
    </div>
    
    <div class="row">
      <div class="cell" data-title="Product">
        Leather iPhone wallet
      </div>
      <div class="cell" data-title="Unit Price">
        $45
      </div>
      <div class="cell" data-title="Quantity">
        120
      </div>
      <div class="cell" data-title="Date Sold">
        02/28/2014
      </div>
      <div class="cell" data-title="Status">
        In Transit
      </div>
    </div>
    
    <div class="row">
      <div class="cell" data-title="Product">
        27" Apple Thunderbolt displays
      </div>
      <div class="cell" data-title="Unit Price">
        $1000
      </div>
      <div class="cell" data-title="Quantity">
        25
      </div>
      <div class="cell" data-title="Date Sold">
        02/10/2014
      </div>
      <div class="cell" data-title="Status">
        Delivered
      </div>
    </div>
    
    <div class="row">
      <div class="cell" data-title="Product">
        Bose studio headphones
      </div>
      <div class="cell" data-title="Unit Price">
        $60
      </div>
      <div class="cell" data-title="Quantity">
        90
      </div>
      <div class="cell" data-title="Date Sold">
        01/14/2014
      </div>
      <div class="cell" data-title="Status">
        Delivered
      </div>
    </div>
    
  </div>

</html>