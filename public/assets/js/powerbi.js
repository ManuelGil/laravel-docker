
(function () {
    var models = window['powerbi-client'].models;
    
    var embedConfiguration= {
    type: 'report',
    id: '992ffcd7-7173-49d0-a7f5-d24b7e69e59a', // the report ID
    embedUrl: "{{$embedUrl}}",
    accessToken: "{{$token}}",
    permissions: models.Permissions.Read,
        settings: {
            background: models.BackgroundType.Transparent,
            panes:{
                bookmarks: {
                    visible: true
                },
                fields: {
                    expanded: true
                },
                filters: {
                    expanded: true,
                    visible: true
                },
                pageNavigation: {
                    visible: true
                },
                selection: {
                    visible: true
                },
                syncSlicers: {
                    visible: true
                },
                visualizations: {
                    expanded: true
                }
            }
        }
    };
    
    var reportContainer = $('#reportContainer');
    
    var report = powerbi.embed(reportContainer.get(0), embedConfiguration);
            console.log( models );
        });
     
        $( window ).on( "load", function() {
            console.log( "window loaded" );
        });