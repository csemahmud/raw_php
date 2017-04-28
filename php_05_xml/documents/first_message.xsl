<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : first_message.xsl
    Created on : November 8, 2014, 11:41 AM
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
                <title>first_message</title>
                <style type="text/css">

                    #root{
                        float: left;
                        display: block;
                        background-color: #663399;
                        color: #ffff00;
                        margin: 50px;
                        padding: 10px;
                        width: 500px;
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
                <div id='root'>
                    <xsl:for-each select="root/note">
                        <h3>   -----   Note   -----   </h3>
                        <table>
                            <tr>
                                <td>
                                    <strong>   To : </strong>
                                </td>
                                <td>
                                    <i> 
                                        <xsl:value-of select="to"></xsl:value-of> 
                                    </i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>   From : </strong>
                                </td>
                                <td>
                                    <i> 
                                        <xsl:value-of select="from"></xsl:value-of> 
                                    </i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>   Heading : </strong>
                                </td>
                                <td>
                                    <i> 
                                        <xsl:value-of select="heading"></xsl:value-of> 
                                    </i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>   Message : </strong>
                                </td>
                                <td>
                                    <i> 
                                        <xsl:value-of select="body"></xsl:value-of> 
                                    </i>
                                </td>
                            </tr>
                        </table>
                        <hr/>
                    </xsl:for-each>
                </div>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
