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
        $__internal_ec2ec3f9aa1132fc9b3ee93348b763dda212c311e232d71edd91b4e274ef1c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2ec3f9aa1132fc9b3ee93348b763dda212c311e232d71edd91b4e274ef1c20->enter($__internal_ec2ec3f9aa1132fc9b3ee93348b763dda212c311e232d71edd91b4e274ef1c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

        $__internal_1d1bb3c66c22a4fa9171e12c3a4e6249b96c147af3485678d1c9f4ac159546aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1bb3c66c22a4fa9171e12c3a4e6249b96c147af3485678d1c9f4ac159546aa->enter($__internal_1d1bb3c66c22a4fa9171e12c3a4e6249b96c147af3485678d1c9f4ac159546aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:head.html.twig"));

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
        
        $__internal_ec2ec3f9aa1132fc9b3ee93348b763dda212c311e232d71edd91b4e274ef1c20->leave($__internal_ec2ec3f9aa1132fc9b3ee93348b763dda212c311e232d71edd91b4e274ef1c20_prof);

        
        $__internal_1d1bb3c66c22a4fa9171e12c3a4e6249b96c147af3485678d1c9f4ac159546aa->leave($__internal_1d1bb3c66c22a4fa9171e12c3a4e6249b96c147af3485678d1c9f4ac159546aa_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_71a802c809ef2794cbc95f9c2a18bf00434178880f1bc4e94125f41f8972ff83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a802c809ef2794cbc95f9c2a18bf00434178880f1bc4e94125f41f8972ff83->enter($__internal_71a802c809ef2794cbc95f9c2a18bf00434178880f1bc4e94125f41f8972ff83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8febcd05c3133e6aa694923d67445f0f7c305a6a461910198e1854113efcbc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8febcd05c3133e6aa694923d67445f0f7c305a6a461910198e1854113efcbc04->enter($__internal_8febcd05c3133e6aa694923d67445f0f7c305a6a461910198e1854113efcbc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ESF - Espace Abonne
  ";
        
        $__internal_8febcd05c3133e6aa694923d67445f0f7c305a6a461910198e1854113efcbc04->leave($__internal_8febcd05c3133e6aa694923d67445f0f7c305a6a461910198e1854113efcbc04_prof);

        
        $__internal_71a802c809ef2794cbc95f9c2a18bf00434178880f1bc4e94125f41f8972ff83->leave($__internal_71a802c809ef2794cbc95f9c2a18bf00434178880f1bc4e94125f41f8972ff83_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7c75fce6573ba9eb1e38dbf328fdca790c8a803f16af167da1c5203c97b98fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c75fce6573ba9eb1e38dbf328fdca790c8a803f16af167da1c5203c97b98fa->enter($__internal_e7c75fce6573ba9eb1e38dbf328fdca790c8a803f16af167da1c5203c97b98fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b576074e413ed70cf006271cc19e9ac948a882d4d0af8e06f3b53c8c27c12392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b576074e413ed70cf006271cc19e9ac948a882d4d0af8e06f3b53c8c27c12392->enter($__internal_b576074e413ed70cf006271cc19e9ac948a882d4d0af8e06f3b53c8c27c12392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b576074e413ed70cf006271cc19e9ac948a882d4d0af8e06f3b53c8c27c12392->leave($__internal_b576074e413ed70cf006271cc19e9ac948a882d4d0af8e06f3b53c8c27c12392_prof);

        
        $__internal_e7c75fce6573ba9eb1e38dbf328fdca790c8a803f16af167da1c5203c97b98fa->leave($__internal_e7c75fce6573ba9eb1e38dbf328fdca790c8a803f16af167da1c5203c97b98fa_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb8ae7fa310b6f703f60efb08e0f6697a0c923319502e1376a162291609f1f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8ae7fa310b6f703f60efb08e0f6697a0c923319502e1376a162291609f1f12->enter($__internal_bb8ae7fa310b6f703f60efb08e0f6697a0c923319502e1376a162291609f1f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38a87159406c36eb9fa637b885377b7fec71ae6bd51a16f9acc19fc0e88648d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a87159406c36eb9fa637b885377b7fec71ae6bd51a16f9acc19fc0e88648d8->enter($__internal_38a87159406c36eb9fa637b885377b7fec71ae6bd51a16f9acc19fc0e88648d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_38a87159406c36eb9fa637b885377b7fec71ae6bd51a16f9acc19fc0e88648d8->leave($__internal_38a87159406c36eb9fa637b885377b7fec71ae6bd51a16f9acc19fc0e88648d8_prof);

        
        $__internal_bb8ae7fa310b6f703f60efb08e0f6697a0c923319502e1376a162291609f1f12->leave($__internal_bb8ae7fa310b6f703f60efb08e0f6697a0c923319502e1376a162291609f1f12_prof);

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
