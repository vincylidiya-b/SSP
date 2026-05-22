@component('mail::message')
# New Enquiry Received

**School Name:** {{ $enquiry->school_name }}  
**Contact Person:** {{ $enquiry->contact_person }}  
**Phone:** {{ $enquiry->contact_number }}  
**Email:** {{ $enquiry->email }}  
**Address:** {{ $enquiry->address }}  
**City:** {{ $enquiry->city }}  
**Message:**  
{{ $enquiry->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
