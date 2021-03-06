<!doctype html>
<html lang="en-US">

<style>
#keywords {
  margin: 0 auto;
  font-size: 1.2em;
  margin-bottom: 15px;
}


#keywords thead {
  cursor: pointer;
  background: #c9dff0;
}
#keywords thead tr th { 
  font-weight: bold;
  padding: 12px 30px;
  padding-left: 42px;
}
#keywords thead tr th span { 
  padding-right: 20px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords thead tr th.headerSortUp span {
  background-image: url('up-arrow.png');
}
#keywords thead tr th.headerSortDown span {
  background-image: url('down-arrow.png');
}


#keywords tbody tr { 
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
}
#keywords tbody tr td.lalign {
  text-align: left;
}
</style>
<script>
$(function(){
  $('#keywords').tablesorter(); 
});
</script>
<script>
$(document).ready(function() { 
    $("table").tablesorter({widthFixed: true, widgets: ['zebra']}).tablesorterPager({container: $("#pager")}); 
}); 
</script>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Simple Table Sorting with jQuery - Treehouse Demo</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://d15dxvojnvxp1x.cloudfront.net/assets/favicon.ico">
  <link rel="icon" href="http://d15dxvojnvxp1x.cloudfront.net/assets/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
</head>
<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Keywords</span></th>
        <th><span>Impressions</span></th>
        <th><span>Clicks</span></th>
        <th><span>CTR</span></th>
        <th><span>Rank</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="lalign">silly tshirts</td>
        <td>6,000</td>
        <td>110</td>
        <td>1.8%</td>
        <td>22.2</td>
      </tr>
	  <tr>
        <td class="lalign">silly tshirts</td>
        <td>5,000</td>
        <td>110</td>
        <td>1.8%</td>
        <td>22.2</td>
      </tr>
	  <tr>
        <td class="lalign">silly tshirts</td>
        <td>4,000</td>
        <td>110</td>
        <td>1.8%</td>
        <td>22.2</td>
      </tr>
	  <tr>
        <td class="lalign">silly tshirts</td>
        <td>3,000</td>
        <td>110</td>
        <td>1.8%</td>
        <td>22.2</td>
      </tr>
	  </tbody
</table>

</html>