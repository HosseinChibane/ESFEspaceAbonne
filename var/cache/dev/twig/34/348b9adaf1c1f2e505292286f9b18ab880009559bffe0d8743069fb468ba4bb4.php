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
        $__internal_67513571c0ff4d1d970dbb4b9a7294885a1699025e36213b000de1b2b6dafb5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67513571c0ff4d1d970dbb4b9a7294885a1699025e36213b000de1b2b6dafb5a->enter($__internal_67513571c0ff4d1d970dbb4b9a7294885a1699025e36213b000de1b2b6dafb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        $__internal_ba12d637415f35bf29f35fc6defd1d7520bfb7ef332b5bbfd03dc0529b556864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba12d637415f35bf29f35fc6defd1d7520bfb7ef332b5bbfd03dc0529b556864->enter($__internal_ba12d637415f35bf29f35fc6defd1d7520bfb7ef332b5bbfd03dc0529b556864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

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
        
        $__internal_67513571c0ff4d1d970dbb4b9a7294885a1699025e36213b000de1b2b6dafb5a->leave($__internal_67513571c0ff4d1d970dbb4b9a7294885a1699025e36213b000de1b2b6dafb5a_prof);

        
        $__internal_ba12d637415f35bf29f35fc6defd1d7520bfb7ef332b5bbfd03dc0529b556864->leave($__internal_ba12d637415f35bf29f35fc6defd1d7520bfb7ef332b5bbfd03dc0529b556864_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_70a0c22e14dfec8beac9045dcc5948ea2818898fa15ccc67ff8bde1481c8606a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a0c22e14dfec8beac9045dcc5948ea2818898fa15ccc67ff8bde1481c8606a->enter($__internal_70a0c22e14dfec8beac9045dcc5948ea2818898fa15ccc67ff8bde1481c8606a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0fa7b3b41bde21f0f8937a4f62268ffd8a6b0e702e5c1fbfa57887432c5066f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa7b3b41bde21f0f8937a4f62268ffd8a6b0e702e5c1fbfa57887432c5066f6->enter($__internal_0fa7b3b41bde21f0f8937a4f62268ffd8a6b0e702e5c1fbfa57887432c5066f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ESF - Espace Abonne
  ";
        
        $__internal_0fa7b3b41bde21f0f8937a4f62268ffd8a6b0e702e5c1fbfa57887432c5066f6->leave($__internal_0fa7b3b41bde21f0f8937a4f62268ffd8a6b0e702e5c1fbfa57887432c5066f6_prof);

        
        $__internal_70a0c22e14dfec8beac9045dcc5948ea2818898fa15ccc67ff8bde1481c8606a->leave($__internal_70a0c22e14dfec8beac9045dcc5948ea2818898fa15ccc67ff8bde1481c8606a_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd127f40885eda1f73fe2be3dc1bebeff952c862955aaf186c3530c52e8cc9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd127f40885eda1f73fe2be3dc1bebeff952c862955aaf186c3530c52e8cc9a9->enter($__internal_bd127f40885eda1f73fe2be3dc1bebeff952c862955aaf186c3530c52e8cc9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_307cbfdd87ed7b3651c2a1bc2e6fe582993c6609b10f6b43ffb57eb37ff5ddb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307cbfdd87ed7b3651c2a1bc2e6fe582993c6609b10f6b43ffb57eb37ff5ddb1->enter($__internal_307cbfdd87ed7b3651c2a1bc2e6fe582993c6609b10f6b43ffb57eb37ff5ddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_307cbfdd87ed7b3651c2a1bc2e6fe582993c6609b10f6b43ffb57eb37ff5ddb1->leave($__internal_307cbfdd87ed7b3651c2a1bc2e6fe582993c6609b10f6b43ffb57eb37ff5ddb1_prof);

        
        $__internal_bd127f40885eda1f73fe2be3dc1bebeff952c862955aaf186c3530c52e8cc9a9->leave($__internal_bd127f40885eda1f73fe2be3dc1bebeff952c862955aaf186c3530c52e8cc9a9_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cfc6b3c85bde2379d1dd2f584039b82311120021c7d0433f9248e4fce44e1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfc6b3c85bde2379d1dd2f584039b82311120021c7d0433f9248e4fce44e1c6->enter($__internal_8cfc6b3c85bde2379d1dd2f584039b82311120021c7d0433f9248e4fce44e1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ed2abc5e70bda0cf247ad9e1efda4e58bdc1f3e490553cd87f4bdcb71635aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed2abc5e70bda0cf247ad9e1efda4e58bdc1f3e490553cd87f4bdcb71635aaf->enter($__internal_8ed2abc5e70bda0cf247ad9e1efda4e58bdc1f3e490553cd87f4bdcb71635aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8ed2abc5e70bda0cf247ad9e1efda4e58bdc1f3e490553cd87f4bdcb71635aaf->leave($__internal_8ed2abc5e70bda0cf247ad9e1efda4e58bdc1f3e490553cd87f4bdcb71635aaf_prof);

        
        $__internal_8cfc6b3c85bde2379d1dd2f584039b82311120021c7d0433f9248e4fce44e1c6->leave($__internal_8cfc6b3c85bde2379d1dd2f584039b82311120021c7d0433f9248e4fce44e1c6_prof);

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
