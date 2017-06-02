<?php

/* :backend:head.html.twig */
class __TwigTemplate_c2bdd3da83c2caad471f2b1036fe611a143c3c05f8f842614ba88b0f2bbd95f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2717ae0e08bb789fdc737e882e4c44fc1a1c016737f0a90663109d1e753ecc00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2717ae0e08bb789fdc737e882e4c44fc1a1c016737f0a90663109d1e753ecc00->enter($__internal_2717ae0e08bb789fdc737e882e4c44fc1a1c016737f0a90663109d1e753ecc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        $__internal_70a3bf50fc8d8c8c4ccb6250b627279112ec76444738b3dac894e803a58b1794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a3bf50fc8d8c8c4ccb6250b627279112ec76444738b3dac894e803a58b1794->enter($__internal_70a3bf50fc8d8c8c4ccb6250b627279112ec76444738b3dac894e803a58b1794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<title>
  ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "</title>

";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_2717ae0e08bb789fdc737e882e4c44fc1a1c016737f0a90663109d1e753ecc00->leave($__internal_2717ae0e08bb789fdc737e882e4c44fc1a1c016737f0a90663109d1e753ecc00_prof);

        
        $__internal_70a3bf50fc8d8c8c4ccb6250b627279112ec76444738b3dac894e803a58b1794->leave($__internal_70a3bf50fc8d8c8c4ccb6250b627279112ec76444738b3dac894e803a58b1794_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_342c7c4de3ee4167d1102ae7345ceef4d103cf6595abfaf195b3bb2faadb75de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342c7c4de3ee4167d1102ae7345ceef4d103cf6595abfaf195b3bb2faadb75de->enter($__internal_342c7c4de3ee4167d1102ae7345ceef4d103cf6595abfaf195b3bb2faadb75de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61f39511e90c124e1365f12e3be07bda3a2ebd031380898ddd733ddfd6434cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f39511e90c124e1365f12e3be07bda3a2ebd031380898ddd733ddfd6434cbd->enter($__internal_61f39511e90c124e1365f12e3be07bda3a2ebd031380898ddd733ddfd6434cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ESF - Espace Abonne
  ";
        
        $__internal_61f39511e90c124e1365f12e3be07bda3a2ebd031380898ddd733ddfd6434cbd->leave($__internal_61f39511e90c124e1365f12e3be07bda3a2ebd031380898ddd733ddfd6434cbd_prof);

        
        $__internal_342c7c4de3ee4167d1102ae7345ceef4d103cf6595abfaf195b3bb2faadb75de->leave($__internal_342c7c4de3ee4167d1102ae7345ceef4d103cf6595abfaf195b3bb2faadb75de_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_604f2148d07218da385a0d7abe7c6bacd627ad9abfd07977bc06a270bbcd2761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604f2148d07218da385a0d7abe7c6bacd627ad9abfd07977bc06a270bbcd2761->enter($__internal_604f2148d07218da385a0d7abe7c6bacd627ad9abfd07977bc06a270bbcd2761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a29cdc738cd68da9a38d9fbaed5a431457e7e17613b12996d2f70eefa16bebc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29cdc738cd68da9a38d9fbaed5a431457e7e17613b12996d2f70eefa16bebc1->enter($__internal_a29cdc738cd68da9a38d9fbaed5a431457e7e17613b12996d2f70eefa16bebc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "      
  <!-- Bootstrap Core CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esfespaceabonne/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Custom CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esfespaceabonne/css/modern-business.css"), "html", null, true);
        echo "\">
  <!-- Custom Fonts -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esfespaceabonne/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esfespaceabonne/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- DataTable -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
";
        
        $__internal_a29cdc738cd68da9a38d9fbaed5a431457e7e17613b12996d2f70eefa16bebc1->leave($__internal_a29cdc738cd68da9a38d9fbaed5a431457e7e17613b12996d2f70eefa16bebc1_prof);

        
        $__internal_604f2148d07218da385a0d7abe7c6bacd627ad9abfd07977bc06a270bbcd2761->leave($__internal_604f2148d07218da385a0d7abe7c6bacd627ad9abfd07977bc06a270bbcd2761_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6948b834c479733515af2cfdd0597b30a1b6baccd04e94abd7ae1d2f5742d322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6948b834c479733515af2cfdd0597b30a1b6baccd04e94abd7ae1d2f5742d322->enter($__internal_6948b834c479733515af2cfdd0597b30a1b6baccd04e94abd7ae1d2f5742d322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_364f7a762a9f727597339f26c5dea89960b7ac224fbab1994ed50213bd8dbc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364f7a762a9f727597339f26c5dea89960b7ac224fbab1994ed50213bd8dbc78->enter($__internal_364f7a762a9f727597339f26c5dea89960b7ac224fbab1994ed50213bd8dbc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "  <!-- Bootstrap -->
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esfespaceabonne/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <!-- jQuery -->
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esfespaceabonne/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esfespaceabonne/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <!-- DataTable -->
  <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
  <script type=\"text/javascript\"  src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js\"></script>
  <script type=\"text/javascript\"  src=\"https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js\"></script>
";
        
        $__internal_364f7a762a9f727597339f26c5dea89960b7ac224fbab1994ed50213bd8dbc78->leave($__internal_364f7a762a9f727597339f26c5dea89960b7ac224fbab1994ed50213bd8dbc78_prof);

        
        $__internal_6948b834c479733515af2cfdd0597b30a1b6baccd04e94abd7ae1d2f5742d322->leave($__internal_6948b834c479733515af2cfdd0597b30a1b6baccd04e94abd7ae1d2f5742d322_prof);

    }

    public function getTemplateName()
    {
        return ":backend:head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 34,  138 => 32,  133 => 30,  130 => 29,  121 => 28,  104 => 20,  100 => 19,  95 => 17,  90 => 15,  78 => 13,  67 => 9,  58 => 8,  48 => 28,  45 => 27,  43 => 13,  39 => 11,  37 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<title>
  {% block title %}
    ESF - Espace Abonne
  {% endblock %}
</title>

{% block stylesheets %}      
  <!-- Bootstrap Core CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/esfespaceabonne/css/bootstrap.min.css') }}\">
  <!-- Custom CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/esfespaceabonne/css/modern-business.css') }}\">
  <!-- Custom Fonts -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/esfespaceabonne/font-awesome/css/font-awesome.min.css') }}\">
  <link href=\"{{ asset('bundles/esfespaceabonne/css/font-awesome.css') }}\" rel=\"stylesheet\">
  <!-- DataTable -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
{% endblock %}

{% block javascripts %}
  <!-- Bootstrap -->
  <script src=\"{{ asset('bundles/esfespaceabonne/js/bootstrap.min.js') }}\"></script>
  <!-- jQuery -->
  <script src=\"{{ asset('bundles/esfespaceabonne/js/jquery.js') }}\"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src=\"{{ asset('bundles/esfespaceabonne/js/bootstrap.min.js') }}\"></script>
  <!-- DataTable -->
  <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
  <script type=\"text/javascript\"  src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js\"></script>
  <script type=\"text/javascript\"  src=\"https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js\"></script>
{% endblock %}", ":backend:head.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\views\\backend\\head.html.twig");
    }
}
