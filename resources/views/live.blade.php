<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <style>
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 17cm;  
  height:1.2cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(/img/dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 15px;
  margin-right: 5px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: center;
}

table td {
  padding: 20px;
  text-align: center;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="img/logo2.png">
      </div>
      @foreach($clients as $client)
      <h1>BOOKING ID: {{$client->id}}</h1>
       
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      <div id="project">
        
        <div><span>CUSTOMER</span> {{$client->company}}</div>
        <div><span>ADDRESS</span> {{$client->address}}</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">{{$client->email}}</a></div>
        <div><span>BOOKING DATE</span> {{$client->created_at}}</div>
        <div><span>BOOKING STATUS</span> <strong>
          @if($client->status==0)
          @php $state='Pending'
          @endphp
          @elseif($client->status==1)
          @php $state='Confirmed'
          @endphp
          @elseif($client->status==2)
          @php $state='Cancelled'
          @endphp
          @endif
          {{$state}}
        </strong></div>
        
      </div>
      @endforeach
    </header>
    <main>
      <table>
         @foreach($clients as $client)
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">LOCATION</th>
            <th>MAT AD</th>
            <th>GRAFFIT BRANDING</th>
            <th>WIFI MATS</th>
            <th>WIFI RESTAURANTS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">{{$client->service}}</td>
            <td class="desc">{{$client->location}}</td>
            <td class="unit">
                @if(!empty($client->mat))
             {{$client->mat}}
                     @else
             @php $mat='None'
             @endphp
             {{$mat}}
            @endif
            </td>
            <td class="qty">
                @if(!empty($client->graffiti_mats))
             {{$client->graffiti_mats}}
                     @else
             @php $graffiti='None'
             @endphp
             {{$graffiti}}
            @endif
            </td>
            <td class="total">
                @if(!empty($client->wifi_mats))
             {{$client->wifi_mats}}
                     @else
             @php $wifi_mat='None'
             @endphp
             {{$wifi_mat}}
            @endif
            </td>
            <td class="total">
                 @if(!empty($client->wifi_restaurants))
             {{$client->wifi_restaurants}}
                     @else
             @php $restaurants='None'
             @endphp
             {{$restaurants}}
            @endif
            </td>
          </tr>
         
          
        </tbody>
         @endforeach
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <h2>THANK YOU FOR BOOKING WITH US</h2>
        <div class="notice">This report shows your booking details, you will get the invoice concerning the booking records.</div>
      </div>
    </main>
    <footer>
      This a report generated by the system and is valid without the signature and seal.<br>
       <div class="pull-right">
    <img src="data:image/png;base64,{{base64_encode($barcode)}}"><br>
  <strong>{{$label}}</strong>
</h4>
    </div>
    </footer>
    
  </body>
</html>