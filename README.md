# gatekeeper
turn on firewall rules with your mobile
This hack uses a microsoft azure virtual ubuntu virtual machine running apache, opendaylight,
and minnet to create a simple software defined network with two hosts and a switch.
A twilio backend will accept a phonecall and present the user with a voice menu that inserts a flow rule to stop or start traffic between two hosts.


-start with ubuntu server image on microsoft azure platform
-install opendaylight hydrogen and mininet
-install apache
-use mininet to create a simple software defined network with one switch and two hosts.
-mininet connect to opendaylight
-use REST API for opendaylight hydrogen to create a new flow to interrupt traffic between two hosts
-use REST API for opendaylight hydrogen to delete the created flow -- reallowing traffic between two hosts
-create cgi scripts that do curl calls to the opendaylight API
-use twilio to call cgi scripts from mobile/text message.
