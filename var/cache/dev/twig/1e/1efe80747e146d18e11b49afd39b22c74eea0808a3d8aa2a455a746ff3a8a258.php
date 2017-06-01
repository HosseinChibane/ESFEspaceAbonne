<?php

/* :backend:head.html.twig */
class __TwigTemplate_a100511997dea978e31d0a299737c01abafe1f9a6a32635e2f0f7d1623369f0a extends Twig_Template
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
        $__internal_3fd21f2ba420c6a4dc3057ef382278bac44ce212a89af0858b8b595e61a3dd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd21f2ba420c6a4dc3057ef382278bac44ce212a89af0858b8b595e61a3dd7e->enter($__internal_3fd21f2ba420c6a4dc3057ef382278bac44ce212a89af0858b8b595e61a3dd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        $__internal_889110a99f4acfa22760d28a49a9b4f9b6ea1a5e4564bb27d2f4bd0182f386f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889110a99f4acfa22760d28a49a9b4f9b6ea1a5e4564bb27d2f4bd0182f386f6->enter($__internal_889110a99f4acfa22760d28a49a9b4f9b6ea1a5e4564bb27d2f4bd0182f386f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

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
        
        $__internal_3fd21f2ba420c6a4dc3057ef382278bac44ce212a89af0858b8b595e61a3dd7e->leave($__internal_3fd21f2ba420c6a4dc3057ef382278bac44ce212a89af0858b8b595e61a3dd7e_prof);

        
        $__internal_889110a99f4acfa22760d28a49a9b4f9b6ea1a5e4564bb27d2f4bd0182f386f6->leave($__internal_889110a99f4acfa22760d28a49a9b4f9b6ea1a5e4564bb27d2f4bd0182f386f6_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fbf5a16148ec141188a727e15b86c303a775ad9b5ac52f042837a0baed1cd9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbf5a16148ec141188a727e15b86c303a775ad9b5ac52f042837a0baed1cd9d->enter($__internal_1fbf5a16148ec141188a727e15b86c303a775ad9b5ac52f042837a0baed1cd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4642644ea9caef19c8e4b7b1a6e9602193bce1e80b126c897a4df0f5f463a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4642644ea9caef19c8e4b7b1a6e9602193bce1e80b126c897a4df0f5f463a6f->enter($__internal_b4642644ea9caef19c8e4b7b1a6e9602193bce1e80b126c897a4df0f5f463a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ESF - Espace Abonne
  ";
        
        $__internal_b4642644ea9caef19c8e4b7b1a6e9602193bce1e80b126c897a4df0f5f463a6f->leave($__internal_b4642644ea9caef19c8e4b7b1a6e9602193bce1e80b126c897a4df0f5f463a6f_prof);

        
        $__internal_1fbf5a16148ec141188a727e15b86c303a775ad9b5ac52f042837a0baed1cd9d->leave($__internal_1fbf5a16148ec141188a727e15b86c303a775ad9b5ac52f042837a0baed1cd9d_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_399512aac68ccbb2a439b14f09562e1034351792b74922a23d90b4925de7632c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399512aac68ccbb2a439b14f09562e1034351792b74922a23d90b4925de7632c->enter($__internal_399512aac68ccbb2a439b14f09562e1034351792b74922a23d90b4925de7632c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_99caa401e80307ee9054c4a0bd7d47739f5a55769be4e49b8a27779f1db080cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99caa401e80307ee9054c4a0bd7d47739f5a55769be4e49b8a27779f1db080cc->enter($__internal_99caa401e80307ee9054c4a0bd7d47739f5a55769be4e49b8a27779f1db080cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_99caa401e80307ee9054c4a0bd7d47739f5a55769be4e49b8a27779f1db080cc->leave($__internal_99caa401e80307ee9054c4a0bd7d47739f5a55769be4e49b8a27779f1db080cc_prof);

        
        $__internal_399512aac68ccbb2a439b14f09562e1034351792b74922a23d90b4925de7632c->leave($__internal_399512aac68ccbb2a439b14f09562e1034351792b74922a23d90b4925de7632c_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bb73f896361abe8e2fc6121cec1561be6ee789a55949a6992526e882c9e0d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb73f896361abe8e2fc6121cec1561be6ee789a55949a6992526e882c9e0d63->enter($__internal_1bb73f896361abe8e2fc6121cec1561be6ee789a55949a6992526e882c9e0d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57a45228da992a8fb83f206426bbe297eac632f46cafa9f51eb46f7f35a545ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a45228da992a8fb83f206426bbe297eac632f46cafa9f51eb46f7f35a545ec->enter($__internal_57a45228da992a8fb83f206426bbe297eac632f46cafa9f51eb46f7f35a545ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_57a45228da992a8fb83f206426bbe297eac632f46cafa9f51eb46f7f35a545ec->leave($__internal_57a45228da992a8fb83f206426bbe297eac632f46cafa9f51eb46f7f35a545ec_prof);

        
        $__internal_1bb73f896361abe8e2fc6121cec1561be6ee789a55949a6992526e882c9e0d63->leave($__internal_1bb73f896361abe8e2fc6121cec1561be6ee789a55949a6992526e882c9e0d63_prof);

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
{% endblock %}", ":backend:head.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources\\views/backend/head.html.twig");
    }
}
