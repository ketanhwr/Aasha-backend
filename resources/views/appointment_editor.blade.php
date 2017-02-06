<form method = "POST">
Time: <input type="text" value="{{ $appointment->time }}" name="time" />
Status: <input type="text" value="{{ $appointment->status }}" name="status" />
<input type="submit" value="submit"/>
</form>