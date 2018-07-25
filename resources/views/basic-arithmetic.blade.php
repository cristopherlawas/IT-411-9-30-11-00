<h1>Basic Arithmetic</h1>

@if($op=="add")
<h3>Operator:{{$op}}</h3>
<br>
First Number:{{$n1}}
<br>
Second Number:{{$n2}}
<br>
Answer is:{{$ans=$n1+$n2}}

@elseif($op=="sub")
<h3>Operator:{{$op}}</h3>
<br>
First Number:{{$n1}}
<br>
Second Number:{{$n2}}
<br>
Answer is:{{$ans=$n1-$n2}}

@elseif($op=="mul")
<h3>Operator:{{$op}}</h3>
<br>
First Number:{{$n1}}
<br>
Second Number:{{$n2}}
<br>
Answer is:{{$ans=$n1*$n2}}

@elseif($op=="div")
<h3>Operator:{{$op}}</h3>
<br>
First Number:{{$n1}}
<br>
Second Number:{{$n2}}
<br>
Answer is:{{$ans=$n1/$n2}}
@endif