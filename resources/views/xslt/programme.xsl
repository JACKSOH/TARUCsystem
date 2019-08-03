<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
                <title>
                    Programme
                </title>

            </head>
            <body>
                <h2></h2>
                <table class="alt">
                    <thead>
                        <tr>
                            <th align="center">Programme Code</th>
                            <th align="center">Programme Name</th>
                            <th align="center">Programme Description</th>
                            <th align="center">Duration(Full Time)</th>
                            <th align="center">Duration(Part Time)</th>
                            <th align="center">Faculty</th>
                            <th align="center">Professional Certification</th>
                            <th align="center">Minimmum Entry Requirement (SPM)</th>
                            <th align="center">Minimmum Entry Requirement (STPM)</th>
                            <th align="center">Minimmum Entry Requirement (UEC)</th>
                            <th align="center">Minimmum Entry Requirement Description</th>

                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="/ProgrammeList/Programme">
                            <tr>
                                <td align="center"><xsl:value-of select="ProgrammeCode"/></td>
                                <td align="center"><xsl:value-of select="ProgrammeName"/></td>
                                <td align="center"><xsl:value-of select="ProgrammeDescription"/></td>
                                <td align="center"><xsl:value-of select="ProgrammeFullTimeDuration"/></td>
                                <td align="center"><xsl:value-of select="ProgrammePartTimeDuration"/></td>
                                <td align="center"><xsl:value-of select="ProfessionalCertification"/></td>
                                <td align="center"><xsl:value-of select="MER_SPM"/></td>
                                <td align="center"><xsl:value-of select="MER_STPM"/></td>
                                <td align="center"><xsl:value-of select="MER_UEC"/></td>
                                <td align="center"><xsl:value-of select="MER_desc"/></td>

                            </tr>
                        </xsl:for-each>
                    </tbody>

                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
