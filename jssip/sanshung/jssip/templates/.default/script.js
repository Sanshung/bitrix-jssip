$(document).ready(function(e) {
   var 
		ws_servers = document.getElementById('ws_servers').value,
		outbound_proxy = document.getElementById('outboundproxy').value,
		uri =  document.getElementById('user_sip_id').value,
		password = document.getElementById('user_sip_password').value;
		
	var configuration = {
		'ws_servers': 'ws://'+ ws_servers, //sip-ws.example.com
		'uri': 'sip:' + uri,
		'password': password,
		'outbound_proxy_set': outbound_proxy
	};
	
	var ua = new JsSIP.UA(configuration);
	JsSIP.debug.enable('JsSIP:*');
	ua.start();
	
	
	// Make an audio/video call:
	var session = null;
	
	// HTML5 <video> elements in which local and remote video will be shown
	var selfView =  document.getElementById('local-media');
	var remoteView = document.getElementById('remote-media');
	
	// Register callbacks to desired call events
	var eventHandlers = {
		'progress': function(e){
			console.log('call is in progress');
		},
		'failed': function(e){
			console.log('call failed with cause: '+ e.data.cause);
		},
		'ended': function(e){
			console.log('call ended with cause: '+ e.data.cause);
		},
		'confirmed': function(e){
			var local_stream = session.connection.getLocalStreams()[0];
			
			console.log('call confirmed');
			
			// Attach local stream to selfView
			selfView = JsSIP.rtcninja.attachMediaStream(selfView, local_stream);
		},
		'addstream': function(e){
			var stream = e.stream;
			
			console.log('remote stream added');
			
			// Attach remote stream to remoteView
			remoteView = JsSIP.rtcninja.attachMediaStream(remoteView, stream);
		}
	};
	
	var options = {
		'eventHandlers': eventHandlers,
		'mediaConstraints': {'audio': true, 'video': false}
	};
	
	$('#phone .controls .dialpad .button').click(function() {
		//console.log($(this).text());
		$('#phone .controls .dial-buttons .destination').val($('#phone .controls .dialbox .destination').val() + $(this).text());
	});
	
	$('#phone .controls .dial-buttons .call-sip').click(function() {
		var options = {
		  'eventHandlers': eventHandlers,
		  'mediaConstraints': {'audio': true, 'video': false}
		};
		session = ua.call('sip:'+ $('#phone .controls .dial-buttons .destination').val() +'@' + ws_servers, options);
	});
});