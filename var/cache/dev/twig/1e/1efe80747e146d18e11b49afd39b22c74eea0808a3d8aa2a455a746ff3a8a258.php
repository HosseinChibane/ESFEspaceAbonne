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
        $__internal_7fa1acc9f034b91320897d88264fa1a6b1f45a6a2fcc8d1f11eb75d96b77c206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa1acc9f034b91320897d88264fa1a6b1f45a6a2fcc8d1f11eb75d96b77c206->enter($__internal_7fa1acc9f034b91320897d88264fa1a6b1f45a6a2fcc8d1f11eb75d96b77c206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        $__internal_e7fcb4f5d857d84be8ce2d3417bed7fdd8541ece96e5d0cb6ebe4ca39bc7d557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fcb4f5d857d84be8ce2d3417bed7fdd8541ece96e5d0cb6ebe4ca39bc7d557->enter($__internal_e7fcb4f5d857d84be8ce2d3417bed7fdd8541ece96e5d0cb6ebe4ca39bc7d557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

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
        
        $__internal_7fa1acc9f034b91320897d88264fa1a6b1f45a6a2fcc8d1f11eb75d96b77c206->leave($__internal_7fa1acc9f034b91320897d88264fa1a6b1f45a6a2fcc8d1f11eb75d96b77c206_prof);

        
        $__internal_e7fcb4f5d857d84be8ce2d3417bed7fdd8541ece96e5d0cb6ebe4ca39bc7d557->leave($__internal_e7fcb4f5d857d84be8ce2d3417bed7fdd8541ece96e5d0cb6ebe4ca39bc7d557_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b665176d4948768fafd6feca9787c45b38f1993cbd9ceee0d1313890607d902b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b665176d4948768fafd6feca9787c45b38f1993cbd9ceee0d1313890607d902b->enter($__internal_b665176d4948768fafd6feca9787c45b38f1993cbd9ceee0d1313890607d902b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77289fb61221b7a80a317dabd3bdc3535659a8e700f09182cac797e82ecb2e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77289fb61221b7a80a317dabd3bdc3535659a8e700f09182cac797e82ecb2e37->enter($__internal_77289fb61221b7a80a317dabd3bdc3535659a8e700f09182cac797e82ecb2e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ESF - Espace Abonne
  ";
        
        $__internal_77289fb61221b7a80a317dabd3bdc3535659a8e700f09182cac797e82ecb2e37->leave($__internal_77289fb61221b7a80a317dabd3bdc3535659a8e700f09182cac797e82ecb2e37_prof);

        
        $__internal_b665176d4948768fafd6feca9787c45b38f1993cbd9ceee0d1313890607d902b->leave($__internal_b665176d4948768fafd6feca9787c45b38f1993cbd9ceee0d1313890607d902b_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3695c50575232c098ca71f9a43857b43282545ce194524fb2c3be3b29a62e7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3695c50575232c098ca71f9a43857b43282545ce194524fb2c3be3b29a62e7d6->enter($__internal_3695c50575232c098ca71f9a43857b43282545ce194524fb2c3be3b29a62e7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a2c30db0e7923d49c57bd2d22c5381382c31ffc6c63f0612e2cdb36a6b6c768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2c30db0e7923d49c57bd2d22c5381382c31ffc6c63f0612e2cdb36a6b6c768->enter($__internal_6a2c30db0e7923d49c57bd2d22c5381382c31ffc6c63f0612e2cdb36a6b6c768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6a2c30db0e7923d49c57bd2d22c5381382c31ffc6c63f0612e2cdb36a6b6c768->leave($__internal_6a2c30db0e7923d49c57bd2d22c5381382c31ffc6c63f0612e2cdb36a6b6c768_prof);

        
        $__internal_3695c50575232c098ca71f9a43857b43282545ce194524fb2c3be3b29a62e7d6->leave($__internal_3695c50575232c098ca71f9a43857b43282545ce194524fb2c3be3b29a62e7d6_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8976728a38eb8e5b7dd7cb9cbfce97a74b4bd072cc4c4cc0efd776facdded44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8976728a38eb8e5b7dd7cb9cbfce97a74b4bd072cc4c4cc0efd776facdded44->enter($__internal_a8976728a38eb8e5b7dd7cb9cbfce97a74b4bd072cc4c4cc0efd776facdded44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e405f1e5cd5b9bb4b69d4d18ddd62f9c7fae448af9e981045c36b87ebd06b2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e405f1e5cd5b9bb4b69d4d18ddd62f9c7fae448af9e981045c36b87ebd06b2df->enter($__internal_e405f1e5cd5b9bb4b69d4d18ddd62f9c7fae448af9e981045c36b87ebd06b2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e405f1e5cd5b9bb4b69d4d18ddd62f9c7fae448af9e981045c36b87ebd06b2df->leave($__internal_e405f1e5cd5b9bb4b69d4d18ddd62f9c7fae448af9e981045c36b87ebd06b2df_prof);

        
        $__internal_a8976728a38eb8e5b7dd7cb9cbfce97a74b4bd072cc4c4cc0efd776facdded44->leave($__internal_a8976728a38eb8e5b7dd7cb9cbfce97a74b4bd072cc4c4cc0efd776facdded44_prof);

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
