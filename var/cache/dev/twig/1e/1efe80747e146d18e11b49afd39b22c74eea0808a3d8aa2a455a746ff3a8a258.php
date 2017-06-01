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
        $__internal_db15afbbcd92ade939ce622d591caf207b6ba79379fce94463a7914577deeb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db15afbbcd92ade939ce622d591caf207b6ba79379fce94463a7914577deeb7f->enter($__internal_db15afbbcd92ade939ce622d591caf207b6ba79379fce94463a7914577deeb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        $__internal_165cb0dc3354d724a7be9bb4df85b6079ac6bcd2671b13f72b28b543244fc6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165cb0dc3354d724a7be9bb4df85b6079ac6bcd2671b13f72b28b543244fc6c4->enter($__internal_165cb0dc3354d724a7be9bb4df85b6079ac6bcd2671b13f72b28b543244fc6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

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
        
        $__internal_db15afbbcd92ade939ce622d591caf207b6ba79379fce94463a7914577deeb7f->leave($__internal_db15afbbcd92ade939ce622d591caf207b6ba79379fce94463a7914577deeb7f_prof);

        
        $__internal_165cb0dc3354d724a7be9bb4df85b6079ac6bcd2671b13f72b28b543244fc6c4->leave($__internal_165cb0dc3354d724a7be9bb4df85b6079ac6bcd2671b13f72b28b543244fc6c4_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_245876ddf5347ea97cbd84322708ddf9b7335da41794599b16d50e0eb1825011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245876ddf5347ea97cbd84322708ddf9b7335da41794599b16d50e0eb1825011->enter($__internal_245876ddf5347ea97cbd84322708ddf9b7335da41794599b16d50e0eb1825011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3af272a787d79918c7c9115e2318198653891bf7d767f6f72440217d4e638b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af272a787d79918c7c9115e2318198653891bf7d767f6f72440217d4e638b6c->enter($__internal_3af272a787d79918c7c9115e2318198653891bf7d767f6f72440217d4e638b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ESF - Espace Abonne
  ";
        
        $__internal_3af272a787d79918c7c9115e2318198653891bf7d767f6f72440217d4e638b6c->leave($__internal_3af272a787d79918c7c9115e2318198653891bf7d767f6f72440217d4e638b6c_prof);

        
        $__internal_245876ddf5347ea97cbd84322708ddf9b7335da41794599b16d50e0eb1825011->leave($__internal_245876ddf5347ea97cbd84322708ddf9b7335da41794599b16d50e0eb1825011_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a166afa0c26430b50b2c85ae92acd315770baa085f7a1ff57df9201d9a735d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a166afa0c26430b50b2c85ae92acd315770baa085f7a1ff57df9201d9a735d2->enter($__internal_2a166afa0c26430b50b2c85ae92acd315770baa085f7a1ff57df9201d9a735d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ad61b48eb42960165e8558d393dda34994f2893e7340aa1119b346c1bc770a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad61b48eb42960165e8558d393dda34994f2893e7340aa1119b346c1bc770a20->enter($__internal_ad61b48eb42960165e8558d393dda34994f2893e7340aa1119b346c1bc770a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ad61b48eb42960165e8558d393dda34994f2893e7340aa1119b346c1bc770a20->leave($__internal_ad61b48eb42960165e8558d393dda34994f2893e7340aa1119b346c1bc770a20_prof);

        
        $__internal_2a166afa0c26430b50b2c85ae92acd315770baa085f7a1ff57df9201d9a735d2->leave($__internal_2a166afa0c26430b50b2c85ae92acd315770baa085f7a1ff57df9201d9a735d2_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2903878b0d9fbfec21f40f00e207f677f09a3a11d32894b79ef0cd627e08c18d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2903878b0d9fbfec21f40f00e207f677f09a3a11d32894b79ef0cd627e08c18d->enter($__internal_2903878b0d9fbfec21f40f00e207f677f09a3a11d32894b79ef0cd627e08c18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d638ff2c00ea0756965ef7c5029d33399456035bc26f9f4435091b6b2124b642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d638ff2c00ea0756965ef7c5029d33399456035bc26f9f4435091b6b2124b642->enter($__internal_d638ff2c00ea0756965ef7c5029d33399456035bc26f9f4435091b6b2124b642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d638ff2c00ea0756965ef7c5029d33399456035bc26f9f4435091b6b2124b642->leave($__internal_d638ff2c00ea0756965ef7c5029d33399456035bc26f9f4435091b6b2124b642_prof);

        
        $__internal_2903878b0d9fbfec21f40f00e207f677f09a3a11d32894b79ef0cd627e08c18d->leave($__internal_2903878b0d9fbfec21f40f00e207f677f09a3a11d32894b79ef0cd627e08c18d_prof);

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
