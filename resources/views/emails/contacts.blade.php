@component('mail::message')


<p style="color:blue">
Hii {{$details['name']}} <br></p>

<p >
Thank You for contacting <span style="color:red"> MITESH SHOPPING </span> you initiated request regarding {{$details['message']}}
We will reply you through mail as soon as possible
 </p>

 <p>
Thanks & Regards,<br>
MITESH SHOPPING
</p>


@endcomponent
