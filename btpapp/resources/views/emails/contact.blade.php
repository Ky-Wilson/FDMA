<h2>Nouvelle demande de contact</h2>
<p><strong>Nom :</strong> {{ $contact['name'] }}</p>
<p><strong>Email :</strong> {{ $contact['email'] }}</p>
<p><strong>Sujet :</strong> {{ $contact['subject'] }}</p>
<p><strong>Message :</strong><br>{{ nl2br(e($contact['message'])) }}</p>
