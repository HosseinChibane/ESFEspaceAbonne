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
        $__internal_c54379c273d25e7e5857343f58ead2b0bdbd6e1e1da6beb4c6389a1e560836d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54379c273d25e7e5857343f58ead2b0bdbd6e1e1da6beb4c6389a1e560836d2->enter($__internal_c54379c273d25e7e5857343f58ead2b0bdbd6e1e1da6beb4c6389a1e560836d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        $__internal_0612d4c7bd9a50917582388aee2a51701aa3af7f1c292f1b324c287587ad4de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0612d4c7bd9a50917582388aee2a51701aa3af7f1c292f1b324c287587ad4de1->enter($__internal_0612d4c7bd9a50917582388aee2a51701aa3af7f1c292f1b324c287587ad4de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

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
        
        $__internal_c54379c273d25e7e5857343f58ead2b0bdbd6e1e1da6beb4c6389a1e560836d2->leave($__internal_c54379c273d25e7e5857343f58ead2b0bdbd6e1e1da6beb4c6389a1e560836d2_prof);

        
        $__internal_0612d4c7bd9a50917582388aee2a51701aa3af7f1c292f1b324c287587ad4de1->leave($__internal_0612d4c7bd9a50917582388aee2a51701aa3af7f1c292f1b324c287587ad4de1_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a1f233ab6cdb37bba1cbb6e07be477f07042b76475bd2372d91d75b4caaa7d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1f233ab6cdb37bba1cbb6e07be477f07042b76475bd2372d91d75b4caaa7d2->enter($__internal_8a1f233ab6cdb37bba1cbb6e07be477f07042b76475bd2372d91d75b4caaa7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ada32e669ac9ee9cacc3289bd9648ab4bf65cc84bcaa255d0bf56b88bb24a703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada32e669ac9ee9cacc3289bd9648ab4bf65cc84bcaa255d0bf56b88bb24a703->enter($__internal_ada32e669ac9ee9cacc3289bd9648ab4bf65cc84bcaa255d0bf56b88bb24a703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ESF - Espace Abonne
  ";
        
        $__internal_ada32e669ac9ee9cacc3289bd9648ab4bf65cc84bcaa255d0bf56b88bb24a703->leave($__internal_ada32e669ac9ee9cacc3289bd9648ab4bf65cc84bcaa255d0bf56b88bb24a703_prof);

        
        $__internal_8a1f233ab6cdb37bba1cbb6e07be477f07042b76475bd2372d91d75b4caaa7d2->leave($__internal_8a1f233ab6cdb37bba1cbb6e07be477f07042b76475bd2372d91d75b4caaa7d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ddc19cbcd23fd95f14071359bccdfbf1c9d41dbccdd5d0ea99a024378e51149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ddc19cbcd23fd95f14071359bccdfbf1c9d41dbccdd5d0ea99a024378e51149->enter($__internal_8ddc19cbcd23fd95f14071359bccdfbf1c9d41dbccdd5d0ea99a024378e51149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e64bb1c058ceabbdd39f799a696e84d2e7b65a103ce9bf56f1f6036b8f830338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64bb1c058ceabbdd39f799a696e84d2e7b65a103ce9bf56f1f6036b8f830338->enter($__internal_e64bb1c058ceabbdd39f799a696e84d2e7b65a103ce9bf56f1f6036b8f830338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e64bb1c058ceabbdd39f799a696e84d2e7b65a103ce9bf56f1f6036b8f830338->leave($__internal_e64bb1c058ceabbdd39f799a696e84d2e7b65a103ce9bf56f1f6036b8f830338_prof);

        
        $__internal_8ddc19cbcd23fd95f14071359bccdfbf1c9d41dbccdd5d0ea99a024378e51149->leave($__internal_8ddc19cbcd23fd95f14071359bccdfbf1c9d41dbccdd5d0ea99a024378e51149_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc23d0da0daedb80e36f07c4745539375e0e5d2997a38da191e6b2762a48ce06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc23d0da0daedb80e36f07c4745539375e0e5d2997a38da191e6b2762a48ce06->enter($__internal_bc23d0da0daedb80e36f07c4745539375e0e5d2997a38da191e6b2762a48ce06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d7965e100756149def36b0e252e570469fab387217a90b432b40cc36c72c1f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7965e100756149def36b0e252e570469fab387217a90b432b40cc36c72c1f07->enter($__internal_d7965e100756149def36b0e252e570469fab387217a90b432b40cc36c72c1f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d7965e100756149def36b0e252e570469fab387217a90b432b40cc36c72c1f07->leave($__internal_d7965e100756149def36b0e252e570469fab387217a90b432b40cc36c72c1f07_prof);

        
        $__internal_bc23d0da0daedb80e36f07c4745539375e0e5d2997a38da191e6b2762a48ce06->leave($__internal_bc23d0da0daedb80e36f07c4745539375e0e5d2997a38da191e6b2762a48ce06_prof);

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
