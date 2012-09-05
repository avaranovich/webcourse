 
<?php 
 
$clientip=$_SERVER['REMOTE_ADDR'];
$clienthostname=$_SERVER['REMOTE_HOST'];
$clienthostname2=gethostbyaddr($clientip);
$originalip=$_SERVER['HTTP_X_FORWARDED_FOR'];
 
$clientbrowser=$_SERVER['HTTP_USER_AGENT'];
$referrer=$_SERVER['HTTP_REFERER'];
 
$serverip=$_SERVER['SERVER_ADDR'];
$servername=$_SERVER['SERVER_NAME'];
$serversoftware=$_SERVER['SERVER_SOFTWARE'];
 
// execute a shell command:
$output=shell_exec("ps -p $$ -o user,ruser");                   

print "<table border=1 CELLPADDING=5 cellspacing=0  bgcolor=#eeeeee>\n"; 
print "<tr> <td> Client IP                                  </td> <td> $clientip            </td> </tr>\n";  
print "<tr> <td> Client hostname as environment variable    </td> <td> $clienthostname      </td> </tr>\n";  
print "<tr> <td> Client hostname (done manually)            </td> <td> $clienthostname2     </td> </tr>\n";  
 
print "<tr> <td> Query client IP  </td> <td> \n"; 
print "<form action=http://www.domaintools.com/go/ method=get >";
print "<input type=hidden name=service value=whois >";
print "<input name=q type=text value=$clientip size=20 >";
print "<INPUT TYPE=submit VALUE=Search >";
print "</FORM>";
print "</td> </tr>\n"; 
 
print "<tr> <td> Original IP                </td> <td> $originalip                                    </td> </tr>\n";  
print "<tr> <td> Client browser             </td> <td> $clientbrowser                                 </td> </tr>\n";  
print "<tr> <td> Referring page             </td> <td> <a href=$referrer>$referrer</a>    </td> </tr>\n";  
print "<tr> <td> Server IP                  </td> <td> $serverip                                      </td> </tr>\n"; 
print "<tr> <td> Server name                </td> <td> $servername                                    </td> </tr>\n"; 
print "<tr> <td> Server software            </td> <td> $serversoftware                                </td> </tr>\n"; 
print "<tr> <td> Result of shell command    </td> <td> <pre> $output </pre>                    </td> </tr>\n"; 
print "</table><p>\n"; 

?>
