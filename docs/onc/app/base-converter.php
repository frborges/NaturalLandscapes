<script language="JavaScript">
<!-- for wise eyes only
var hex;

function MakeArray()
{
    this.length = 16;
    return this;
}

function Populate()
{
    hex = new MakeArray();
    hex[1] = "0";    
    hex[2] = "1";    
    hex[3] = "2";    
    hex[4] = "3";    
    hex[5] = "4";    
    hex[6] = "5";    
    hex[7] = "6";    
    hex[8] = "7";    
    hex[9] = "8";    
    hex[10] = "9";    
    hex[11] = "A";    
    hex[12] = "B";    
    hex[13] = "C";    
    hex[14] = "D";    
    hex[15] = "E";    
    hex[16] = "F";    
}

// function DecimaltoAnother(N, radix)
// 
// return representation of a number N
// in the system based on radix 
//
function DecimaltoAnother(N, radix)
{
    s = "";

    A = N;
    while (A >= radix)
    {
        B = A % radix;
        A = Math.floor(A / radix);
        s += hex[B+1];
    }
    
    s += hex[A+1];
    return Transpose(s);
}

// function Transpose(s)
//
// return a string written from right to left
//
function Transpose(s)
{
    N = s.length;

    t = "";

    for (i = 0; i < N; i++)
        t = t + s.substring(N-i-1, N-i);

    s = t;
    return s;
}

function EvalB(form)
{
    if (form.b.value.length != 0)
        M = parseInt(form.b.value, 2);
    else
        M = 0;
    form.t.value = DecimaltoAnother(M, 3);
    form.q.value = DecimaltoAnother(M, 5);
    form.o.value = DecimaltoAnother(M, 8);
    form.h.value = DecimaltoAnother(M, 16);
    form.d.value = M;
}

function EvalT(form)
{
    if (form.t.value.length != 0)
        M = parseInt(form.t.value, 3);
    else
        M = 0;
    form.b.value = DecimaltoAnother(M, 2);
    form.q.value = DecimaltoAnother(M, 5);
    form.o.value = DecimaltoAnother(M, 8);
    form.h.value = DecimaltoAnother(M, 16);
    form.d.value = M;
}

function EvalQ(form)
{
    if (form.q.value.length != 0)
        M = parseInt(form.q.value, 5);
    else
        M = 0;
    form.b.value = DecimaltoAnother(M, 2);
    form.t.value = DecimaltoAnother(M, 3);
    form.o.value = DecimaltoAnother(M, 8);
    form.h.value = DecimaltoAnother(M, 16);
    form.d.value = M;
}

function EvalO(form)
{
    if (form.o.value.length != 0)
        M = parseInt(form.o.value, 8);
    else
        M = 0;
    form.b.value = DecimaltoAnother(M, 2);
    form.t.value = DecimaltoAnother(M, 3);
    form.q.value = DecimaltoAnother(M, 5);
    form.h.value = DecimaltoAnother(M, 16);
    form.d.value = M;
}

function EvalH(form)
{
    if (form.h.value.length != 0)
        M = parseInt(form.h.value, 16);
    else
        M = 0;
    form.b.value = DecimaltoAnother(M, 2);
    form.t.value = DecimaltoAnother(M, 3);
    form.q.value = DecimaltoAnother(M, 5);
    form.o.value = DecimaltoAnother(M, 8);
    form.d.value = M;
}

function EvalD(form)
{
    if (form.d.value.length != 0)
        M = parseInt(form.d.value, 10);
    else
        M = 0;
    form.b.value = DecimaltoAnother(M, 2);
    form.t.value = DecimaltoAnother(M, 3);
    form.q.value = DecimaltoAnother(M, 5);
    form.o.value = DecimaltoAnother(M, 8);
    form.h.value = DecimaltoAnother(M, 16);
}
//-- done hiding from old browsers -->
</script>
</head>
<body onLoad="Populate()">
<center><h1>A Base Converter</h1></center>
<p>Type a valid positive number in any one of the boxes and click outside the box. The equivalent will appear in the other boxes.</p>
<form  method="post">
<table border="0" cellspacing="3" cellpadding="3" align="CENTER">
<tr>
<td align=right>
<p>Binary (Base 2):</p>
</td>
<td>
<input  name="b" value="0" onChange="EvalB(form)" size=27>
</td>
</tr>
<tr>
<td align=right>Ternary (Base 3):</td>
<td>
<input name="t" value="0" onChange="EvalT(form)" size=21>
</td>
</tr>
<tr><td align=right>Quintal (Base 5):</td>
<td>
<input name="q" value="0" onChange="EvalQ(form)" size=16>
</td>
</tr>
<tr>
<td align=right>Octal (Base 8):</td>
<td>
<input name="o" value="0" onChange="EvalO(form)" size=12>
</td>
</tr>
<tr>
<td align=right>Decimal (Base 10):</td>
<td>
<input name="d" value="0" onChange="EvalD(form)" size=11>
</td>
</tr>
<tr>
<td align=right>Hexadecimal (Base 16):</td>
<td>
<input name="h" value="0" onChange="EvalH(form)" size=8>
</td>
</tr>
</table>
</form>
