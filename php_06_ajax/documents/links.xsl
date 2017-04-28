<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : links.xsl
    Created on : November 9, 2014, 6:54 AM
    Author     : MAHMUDUL   HASAN   KHAN   w3schools.com   
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <title>links</title>
                <style type="text/css">
                    
                    body{
                        width: 100%;
                    }

                    #root{
                        float: left;
                        display: block;
                        background-color: #663399;
                        color: #ffff00;
                        margin: 50px 2%;
                        padding: 10px 2%;
                        width: 37%;
                        border-radius: 30px;
                        text-align: center;
                    }

                    #root table{
                        width: 100%;
                        text-align: left;
                    }

                    #root table tr{
                        width: 100%;
                    }

                    #root table tr th{
                        border-color: #ffff00;
                        border-width: 2px;
                        border-style: dotted;
                        padding: 2px;
                        background-color: #000033;
                        color: #ffffcc;
                        font-family: sans-serif;
                        text-align: center;
                    }

                    #root table tr td{
                        border-color: #ffff00;
                        border-width: 2px;
                        border-style: dotted;
                        padding: 2px;
                        background-color: #ffffcc;
                        color: #000033;
                    }

                    strong{
                        font-weight: 900;
                        font-family: sans-serif;
                        color: #000066;
                    }

                    i{
                        font-style: italic;
                        font-family: cursive;
                    }

                </style>
            </head>
            <body>
                <div id="root">
                    <h3>     -----     Links     -----     </h3>
                    <table>
                        <tr>
                            <th>Title</th>
                            <th>URL</th>
                        </tr>
                        <xsl:for-each select="root/link">
                            <tr>
                                <td>
                                    <strong><xsl:value-of select="title"></xsl:value-of></strong>
                                </td>
                                <td>
                                    <i><xsl:value-of select="url"></xsl:value-of></i>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </div>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
