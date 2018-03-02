<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        
        <!--jQuery-->
        <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    <body>
        <h4> Select a product</h4>
        
    <br/>
    
    <form method="POST" action="Ebus2.php">
        
        <label for "salesforce">
            <input type="radio" id="salesforce" name="product" onClick="disablebtnProceed()">
            SalesForce @ $100
        </label>
        
        <br/>
        
        <label for "Cloud 9">
            <input type="radio" id="Cloud 9" name="product" onClick="disablebtnProceed()">
            Cloud 9 @ $200
        </label>
        
        <br/>
        
        <label for "Gmail">
            <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()">
            Gmail @ $400
        </label>
        
        <br/>
        
        <label for "aws">
            <input type= "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            AWS @ $300
        </label>
        
        <br/>
        <br/>
        
    <label for "subtotal">
        Subtotal
            <input type= "text" id="subtotal" name="subtotal" value="0.00" readonly/>
            
        </label>
        
        <br/>
        
        <label for "discount">
        Discount @ 5%
            <input type= "text" id="discount" name="discount" value="0.00" readonly/>
            
        </label>
        
        <br/>
        
        <label for "vat">
        VAT
            <input type= "text" id="vat" name="vat" value="0.00" readonly/>
        
        <label for "total">
        Total
            <input type= "text" id="total" name="total" value="0.00" readonly/>
        
        <br/>
        
        <button type ="submit" id="btnProceed" disabled>Add to shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
       
        
        </body>
</html>
