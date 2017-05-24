<?php

/* :backend:head.html.twig */
class __TwigTemplate_2ec74f2b6e712118cf85b3f515de822cebd4d1de9375a3fb7f2716e7971ab12b extends Twig_Template
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
        $__internal_f9b9b88d3bade4232dd4b2465bbb1d9f2dd9c3b4fcbe0743a0e6f2aaa347227c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b9b88d3bade4232dd4b2465bbb1d9f2dd9c3b4fcbe0743a0e6f2aaa347227c->enter($__internal_f9b9b88d3bade4232dd4b2465bbb1d9f2dd9c3b4fcbe0743a0e6f2aaa347227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        $__internal_6faa19bbdc71a9179fbe0cbda4959887b1d2f6138fa2b763de8ce2620ed64414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6faa19bbdc71a9179fbe0cbda4959887b1d2f6138fa2b763de8ce2620ed64414->enter($__internal_6faa19bbdc71a9179fbe0cbda4959887b1d2f6138fa2b763de8ce2620ed64414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

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
        
        $__internal_f9b9b88d3bade4232dd4b2465bbb1d9f2dd9c3b4fcbe0743a0e6f2aaa347227c->leave($__internal_f9b9b88d3bade4232dd4b2465bbb1d9f2dd9c3b4fcbe0743a0e6f2aaa347227c_prof);

        
        $__internal_6faa19bbdc71a9179fbe0cbda4959887b1d2f6138fa2b763de8ce2620ed64414->leave($__internal_6faa19bbdc71a9179fbe0cbda4959887b1d2f6138fa2b763de8ce2620ed64414_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_4367afc2c65b955c18a34d100743e04dd7acbd5736fe0b489b576b5a57454771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4367afc2c65b955c18a34d100743e04dd7acbd5736fe0b489b576b5a57454771->enter($__internal_4367afc2c65b955c18a34d100743e04dd7acbd5736fe0b489b576b5a57454771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6820afeb735dc9c6cc1a5a9ccc39d0b9ada08d2a446e9a19f4d666c4c8601cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6820afeb735dc9c6cc1a5a9ccc39d0b9ada08d2a446e9a19f4d666c4c8601cee->enter($__internal_6820afeb735dc9c6cc1a5a9ccc39d0b9ada08d2a446e9a19f4d666c4c8601cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ESF - Espace Abonne
  ";
        
        $__internal_6820afeb735dc9c6cc1a5a9ccc39d0b9ada08d2a446e9a19f4d666c4c8601cee->leave($__internal_6820afeb735dc9c6cc1a5a9ccc39d0b9ada08d2a446e9a19f4d666c4c8601cee_prof);

        
        $__internal_4367afc2c65b955c18a34d100743e04dd7acbd5736fe0b489b576b5a57454771->leave($__internal_4367afc2c65b955c18a34d100743e04dd7acbd5736fe0b489b576b5a57454771_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8336c5479a114ad16d70d064de58e6364db87f043dfe3cf973e5b9aa047cb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8336c5479a114ad16d70d064de58e6364db87f043dfe3cf973e5b9aa047cb13->enter($__internal_c8336c5479a114ad16d70d064de58e6364db87f043dfe3cf973e5b9aa047cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6fdbb20eb7628d684fa4e2f2045c2e8b22e051d85e201baae30a5c15fba30273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdbb20eb7628d684fa4e2f2045c2e8b22e051d85e201baae30a5c15fba30273->enter($__internal_6fdbb20eb7628d684fa4e2f2045c2e8b22e051d85e201baae30a5c15fba30273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6fdbb20eb7628d684fa4e2f2045c2e8b22e051d85e201baae30a5c15fba30273->leave($__internal_6fdbb20eb7628d684fa4e2f2045c2e8b22e051d85e201baae30a5c15fba30273_prof);

        
        $__internal_c8336c5479a114ad16d70d064de58e6364db87f043dfe3cf973e5b9aa047cb13->leave($__internal_c8336c5479a114ad16d70d064de58e6364db87f043dfe3cf973e5b9aa047cb13_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a43cd763ba1e64938017aaea41bbc5584cc0bfd8a8816a0ff5d741be46258c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43cd763ba1e64938017aaea41bbc5584cc0bfd8a8816a0ff5d741be46258c07->enter($__internal_a43cd763ba1e64938017aaea41bbc5584cc0bfd8a8816a0ff5d741be46258c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_de858adfe96300dac330e157f192118b13cf3c294597aa537c66aba0d551b240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de858adfe96300dac330e157f192118b13cf3c294597aa537c66aba0d551b240->enter($__internal_de858adfe96300dac330e157f192118b13cf3c294597aa537c66aba0d551b240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_de858adfe96300dac330e157f192118b13cf3c294597aa537c66aba0d551b240->leave($__internal_de858adfe96300dac330e157f192118b13cf3c294597aa537c66aba0d551b240_prof);

        
        $__internal_a43cd763ba1e64938017aaea41bbc5584cc0bfd8a8816a0ff5d741be46258c07->leave($__internal_a43cd763ba1e64938017aaea41bbc5584cc0bfd8a8816a0ff5d741be46258c07_prof);

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
