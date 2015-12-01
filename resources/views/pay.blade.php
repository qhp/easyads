<div id="AmazonPayButton"></div>

<div id="addressBookWidgetDiv" style="width:400px; height:240px;"></div>
<div id="walletWidgetDiv" style="width:400px; height:240px;"></div>

<br><br><br>

<a href="/pay" id="amzn-pay">PAY</a>

<script type='text/javascript'>
    window.onAmazonLoginReady = function () {
        amazon.Login.setClientId('amzn1.application-oa2-client.32e89cc2f2ab41f7a128e733d9b3cd98');
        amazon.Login.setUseCookie(true);
    };
</script>

<script type='text/javascript' src='https://static-na.payments-amazon.com/OffAmazonPayments/us/sandbox/js/Widgets.js'></script>

<script type='text/javascript'>
    var authRequest;
    OffAmazonPayments.Button("AmazonPayButton", "A3FGX08H5DGEH6", {
        type: "PwA",
        authorization: function () {
            loginOptions = { scope: "profile postal_code payments:widget payments:shipping_address", popup: true };
            authRequest = amazon.Login.authorize(loginOptions, "http://localhost:8888/pay");
        },
        onError: function (error) {
            // something bad happened
        }
    });
</script>

<script type="text/javascript">
    new OffAmazonPayments.Widgets.AddressBook({
        sellerId: 'A3FGX08H5DGEH6',
        onOrderReferenceCreate: function (orderReference) {
            orderReferenceId = orderReference.getAmazonOrderReferenceId();

            var amzn_href = document.getElementById('amzn-pay').getAttribute('href');
            amzn_href = update_url_parameter(amzn_href, 'amazon_order_reference_id', orderReferenceId);
            document.getElementById('amzn-pay').setAttribute('href', amzn_href);
        },
        onAddressSelect: function () {
            // do stuff here like recalculate tax and/or shipping
        },
        design: {
            designMode: 'responsive'
        },
        onError: function (error) {
            // your error handling code
        }
    }).bind("addressBookWidgetDiv");

    new OffAmazonPayments.Widgets.Wallet({
        sellerId: 'A3FGX08H5DGEH6',
        onPaymentSelect: function () {
        },
        design: {
            designMode: 'responsive'
        },
        onError: function (error) {
            // your error handling code
        }
    }).bind("walletWidgetDiv");
</script>

<script>
    function update_url_parameter(url, param, paramVal)
    {
        var TheAnchor = null;
        var newAdditionalURL = "";
        var tempArray = url.split("?");
        var baseURL = tempArray[0];
        var additionalURL = tempArray[1];
        var temp = "";

        if (additionalURL)
        {
            var tmpAnchor = additionalURL.split("#");
            var TheParams = tmpAnchor[0];
            TheAnchor = tmpAnchor[1];
            if(TheAnchor)
                additionalURL = TheParams;

            tempArray = additionalURL.split("&");

            for (i=0; i<tempArray.length; i++)
            {
                if(tempArray[i].split('=')[0] != param)
                {
                    newAdditionalURL += temp + tempArray[i];
                    temp = "&";
                }
            }
        }
        else
        {
            var tmpAnchor = baseURL.split("#");
            var TheParams = tmpAnchor[0];
            TheAnchor  = tmpAnchor[1];

            if(TheParams)
                baseURL = TheParams;
        }

        if(TheAnchor)
            paramVal += "#" + TheAnchor;

        var rows_txt = temp + "" + param + "=" + paramVal;
        return baseURL + "?" + newAdditionalURL + rows_txt;
    }
</script>