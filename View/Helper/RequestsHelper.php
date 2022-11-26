<?php

/*

Usage

1) add .typeahead class on input text and include jquery

2) load helper file:
public $helpers = array('Typehead.requests');

3) call helper in view:
<?php echo $this->Requests->index(); ?>

*/
App::uses('Helper', 'View');

class RequestsHelper extends AppHelper {

    public $helpers = array('Html');

    public function index($options = array()) {
    
        echo $this->Html->css('Typehead.typehead.css');
        echo $this->Html->script('Typehead.typeahead.bundle.js');

        ?>
        <script>

            var substringMatcher = function(strs) {
            return function findMatches(q, cb) {

                var matches, substringRegex;
                matches = [];
                substrRegex = new RegExp(q, 'i');

                $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                    matches.push(str);
                }
                });

                cb(matches);
            };
            };

            var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
            'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
            'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
            'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
            'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
            'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
            'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
            'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
            'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
            ];

            $('.typeahead').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
                },
                {
                name: 'states',
                source: substringMatcher(states)
            });

            $('.typeahead').bind('typeahead:select', function(ev, suggestion) {
                console.log(suggestion);
            });

        </script>
        <?php

    }

}
