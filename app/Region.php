<?phpnamespace App;use Illuminate\Database\Eloquent\Model;class Region extends Model{    //    //    //documentation    protected $table = 'pr_regions';    public $primaryKey ='PK_pr_regions';    public function pr_regions()    {        return $this->belongsTo('App\pr_preoducer', 'PK_pr_regions');    }}