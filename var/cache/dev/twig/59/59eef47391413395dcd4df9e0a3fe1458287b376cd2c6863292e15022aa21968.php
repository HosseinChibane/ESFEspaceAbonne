<?php

/* ESFEspaceAbonneBundle:Default:aide.html.twig */
class __TwigTemplate_bc893583ada0cec658e05a2593270b22aa61d317d8fa66455cf3fc62bb45506f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:aide.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6bfd3426e6cffc39ab731559ef993b79f41bcc6f28b7a97bf8dc46038a65893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bfd3426e6cffc39ab731559ef993b79f41bcc6f28b7a97bf8dc46038a65893->enter($__internal_e6bfd3426e6cffc39ab731559ef993b79f41bcc6f28b7a97bf8dc46038a65893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:aide.html.twig"));

        $__internal_dc5636e7e6e93f0a373cd79bf35b466850bf4fe01b135d0ddd6f43fc1aee0997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5636e7e6e93f0a373cd79bf35b466850bf4fe01b135d0ddd6f43fc1aee0997->enter($__internal_dc5636e7e6e93f0a373cd79bf35b466850bf4fe01b135d0ddd6f43fc1aee0997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6bfd3426e6cffc39ab731559ef993b79f41bcc6f28b7a97bf8dc46038a65893->leave($__internal_e6bfd3426e6cffc39ab731559ef993b79f41bcc6f28b7a97bf8dc46038a65893_prof);

        
        $__internal_dc5636e7e6e93f0a373cd79bf35b466850bf4fe01b135d0ddd6f43fc1aee0997->leave($__internal_dc5636e7e6e93f0a373cd79bf35b466850bf4fe01b135d0ddd6f43fc1aee0997_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3930460e7b5a9795ea914f00a9d89d9d00064a1442196cfede883b3f672dae18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3930460e7b5a9795ea914f00a9d89d9d00064a1442196cfede883b3f672dae18->enter($__internal_3930460e7b5a9795ea914f00a9d89d9d00064a1442196cfede883b3f672dae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb8c8b2b98ddc93a89a5207dbd40589d1ed99311ddda2a1934e7ceb15d25e219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8c8b2b98ddc93a89a5207dbd40589d1ed99311ddda2a1934e7ceb15d25e219->enter($__internal_bb8c8b2b98ddc93a89a5207dbd40589d1ed99311ddda2a1934e7ceb15d25e219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bb8c8b2b98ddc93a89a5207dbd40589d1ed99311ddda2a1934e7ceb15d25e219->leave($__internal_bb8c8b2b98ddc93a89a5207dbd40589d1ed99311ddda2a1934e7ceb15d25e219_prof);

        
        $__internal_3930460e7b5a9795ea914f00a9d89d9d00064a1442196cfede883b3f672dae18->leave($__internal_3930460e7b5a9795ea914f00a9d89d9d00064a1442196cfede883b3f672dae18_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a7c5f97e55ed7ce59fd2e9ddf863e2166ea560ba9c2a9feca29ab34d52638345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c5f97e55ed7ce59fd2e9ddf863e2166ea560ba9c2a9feca29ab34d52638345->enter($__internal_a7c5f97e55ed7ce59fd2e9ddf863e2166ea560ba9c2a9feca29ab34d52638345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_213b1bf4ab51be6c35970da9c15204ad7e83b6edc3d131575a8dabc5e88518db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213b1bf4ab51be6c35970da9c15204ad7e83b6edc3d131575a8dabc5e88518db->enter($__internal_213b1bf4ab51be6c35970da9c15204ad7e83b6edc3d131575a8dabc5e88518db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 7
        echo "
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">FAQ</li>
    </ol>
";
        
        $__internal_213b1bf4ab51be6c35970da9c15204ad7e83b6edc3d131575a8dabc5e88518db->leave($__internal_213b1bf4ab51be6c35970da9c15204ad7e83b6edc3d131575a8dabc5e88518db_prof);

        
        $__internal_a7c5f97e55ed7ce59fd2e9ddf863e2166ea560ba9c2a9feca29ab34d52638345->leave($__internal_a7c5f97e55ed7ce59fd2e9ddf863e2166ea560ba9c2a9feca29ab34d52638345_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_16b1b3bee386607d8a53dbae77fb2bf29ed6a1f9423324237724679eaf34cf41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b1b3bee386607d8a53dbae77fb2bf29ed6a1f9423324237724679eaf34cf41->enter($__internal_16b1b3bee386607d8a53dbae77fb2bf29ed6a1f9423324237724679eaf34cf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2a6212ba7c3d8334180c907d1f42b331bb0d4011b1d25640584ae2942ad36517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6212ba7c3d8334180c907d1f42b331bb0d4011b1d25640584ae2942ad36517->enter($__internal_2a6212ba7c3d8334180c907d1f42b331bb0d4011b1d25640584ae2942ad36517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 15
        echo "\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Content Row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
        // line 21
        if (array_key_exists("listFAQ", $context)) {
            // line 22
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listFAQ"] ?? $this->getContext($context, "listFAQ")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowFAQ"]) {
                // line 23
                echo "\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "question", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "reponse", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowFAQ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.panel-group -->
\t\t\t</div>
\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
";
        
        $__internal_2a6212ba7c3d8334180c907d1f42b331bb0d4011b1d25640584ae2942ad36517->leave($__internal_2a6212ba7c3d8334180c907d1f42b331bb0d4011b1d25640584ae2942ad36517_prof);

        
        $__internal_16b1b3bee386607d8a53dbae77fb2bf29ed6a1f9423324237724679eaf34cf41->leave($__internal_16b1b3bee386607d8a53dbae77fb2bf29ed6a1f9423324237724679eaf34cf41_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 39,  146 => 38,  134 => 32,  129 => 30,  121 => 27,  115 => 23,  110 => 22,  108 => 21,  100 => 15,  91 => 14,  77 => 9,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
\tAide - {{ parent() }}
{% endblock %}
{% block breadcrumb %}

    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">FAQ</li>
    </ol>
{% endblock %}

{% block Content %}
\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Content Row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t{% if listFAQ is defined %}
\t\t\t\t\t\t{% for rowFAQ in listFAQ %}
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#{{ rowFAQ.id }}\">{{ rowFAQ.question}}</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"{{ rowFAQ.id }}\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t{{ rowFAQ.reponse }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<!-- /.panel-group -->
\t\t\t</div>
\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
{% endblock %}", "ESFEspaceAbonneBundle:Default:aide.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/aide.html.twig");
    }
}
