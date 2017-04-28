<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : product_catalog.xsl
    Created on : November 8, 2014, 10:07 PM
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
                <title>product_catalog</title>
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
                <xsl:for-each select="root/category">
                    <div id="root">
                        <h1>   Category : <i><xsl:value-of select="category_name"></xsl:value-of></i>  </h1>
                        <xsl:for-each select="sub_category">
                            <h3>   Sub-Category : <i>
                                <xsl:value-of select="sub_category_name"></xsl:value-of>
                            </i>  
                            </h3>
                            <xsl:for-each select="product">
                                <table>
                                    <tr>
                                        <td>
                                            <strong>   Product ID : </strong>
                                        </td>
                                        <td>
                                            <i> 
                                                <xsl:value-of select="product_id"></xsl:value-of> 
                                            </i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>   Name : </strong>
                                        </td>
                                        <td>
                                            <i> 
                                                <xsl:value-of select="name"></xsl:value-of> 
                                            </i>
                                        </td>
                                    </tr>
                                    <xsl:if test='os!=""'>
                                        <tr>
                                            <td>
                                                <strong>   OS : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="os"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test="processor!=''">
                                        <tr>
                                            <td>
                                                <strong>   Processor : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="processor"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test='ram!=""'>
                                        <tr>
                                            <td>
                                                <strong>   Ram : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="ram"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test="hdd!=''">
                                        <tr>
                                            <td>
                                                <strong>   HDD : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="hdd"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test='sim!=""'>
                                        <tr>
                                            <td>
                                                <strong>   Sim : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="sim"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test="camera!=''">
                                        <tr>
                                            <td>
                                                <strong>   Camera : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="camera"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test='internet!=""'>
                                        <tr>
                                            <td>
                                                <strong>   Internet : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="internet"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test="bluetooth!=''">
                                        <tr>
                                            <td>
                                                <strong>   Bluetooth : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="bluetooth"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test='fm_radio!=""'>
                                        <tr>
                                            <td>
                                                <strong>   FM Radio : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="fm_radio"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                    <xsl:if test="java!=''">
                                        <tr>
                                            <td>
                                                <strong>   JAVA : </strong>
                                            </td>
                                            <td>
                                                <i> 
                                                    <xsl:value-of select="java"></xsl:value-of> 
                                                </i>
                                            </td>
                                        </tr>
                                    </xsl:if>
                                </table>
                                <hr/>
                            </xsl:for-each>
                        </xsl:for-each>
                    </div>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
