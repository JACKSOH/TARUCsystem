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
                            <th align="center">Programme Name</th>
                        </tr>
                    </thead>

                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
