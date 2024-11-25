<?php

namespace App\Orchid\Layouts\Listener;

use Orchid\Screen\CanSee;
use Orchid\Support\Color;
use Illuminate\Http\Request;
use Orchid\Screen\Repository;
use Faker\Provider\ar_EG\Text;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Layouts\Listener;
use App\Models\Assessment\RMSD as RMSDModel;
use App\Orchid\Layouts\Assessment\VulnGroupOptions;

class VulnerableListener extends Listener
{
    public RMSDModel $rmsd;
    public function __construct(RMSDModel $rmsd)
    {
        $this->rmsd = $rmsd;
    }

    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = ['vuln_group','rmsd'];

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    protected function layouts(): iterable
    {
        return [

           
            Layout::rows([
                Group::make([
                    Select::make('vuln_group')
                        ->options([
                            '' => 'Choose vulnerability group',
                            'V1 Organizational Vulnerability' => 'V1 Organizational Vulnerability',
                            'V2 Technical Vulnerability' => 'V2 Technical Vulnerability',
                            'V3 Policy and Compliance Vulnerability' => 'V3 Policy and Compliance Vulnerability',
                        ])
                        ->title('Add/Update Vulnerability Group')
                        ->help('Select the vulnerability group.'),

                    Select::make('vuln_name')
                        ->options(
                            $this->query->get('vuln_name_options', ['' => 'Choose vulnerability type'])
                        )
                        ->title('Add/Update Vulnerability Details')
                        ->help('Select the vulnerability details.')

                ]),

            ]),
        ];
    }

    /**
     * Update state dynamically based on user input.
     *
     * @param \Orchid\Screen\Repository $repository
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Orchid\Screen\Repository
     */
    public function handle(Repository $repository, Request $request): Repository
    {
        $vulnGroup = $request->input('vuln_group');

        // Fetch dynamic options for vuln_name based on the selected vuln_group
        $vulnNameOptions = VulnGroupOptions::getVulnerabilityGroupOptions($vulnGroup);

        return $repository
            ->set('vuln_group', $vulnGroup)
            ->set('vuln_name_options', $vulnNameOptions);
    }
}