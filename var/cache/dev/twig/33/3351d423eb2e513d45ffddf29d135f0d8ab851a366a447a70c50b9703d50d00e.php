<?php

/* ESFEspaceAbonneBundle:back:aide.html.twig */
class __TwigTemplate_5efd92214e22701638a739f59872f2ef4aa1aed6e1e02cf6f164ce0ffaf0c63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:aide.html.twig", 1);
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
        $__internal_148d51d27ae4e23198d382b7b8537934b6897ddc85a576fcc739ea9f57a35a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148d51d27ae4e23198d382b7b8537934b6897ddc85a576fcc739ea9f57a35a4d->enter($__internal_148d51d27ae4e23198d382b7b8537934b6897ddc85a576fcc739ea9f57a35a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $__internal_97fc99606570b2b7b61dc78c1a5a0130061d9558ecd96487cbe7f094b797204d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fc99606570b2b7b61dc78c1a5a0130061d9558ecd96487cbe7f094b797204d->enter($__internal_97fc99606570b2b7b61dc78c1a5a0130061d9558ecd96487cbe7f094b797204d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_148d51d27ae4e23198d382b7b8537934b6897ddc85a576fcc739ea9f57a35a4d->leave($__internal_148d51d27ae4e23198d382b7b8537934b6897ddc85a576fcc739ea9f57a35a4d_prof);

        
        $__internal_97fc99606570b2b7b61dc78c1a5a0130061d9558ecd96487cbe7f094b797204d->leave($__internal_97fc99606570b2b7b61dc78c1a5a0130061d9558ecd96487cbe7f094b797204d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4bed0875d5edb12fa43fa0611bbc89624a761c5cf713500bb10955955c776ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bed0875d5edb12fa43fa0611bbc89624a761c5cf713500bb10955955c776ba->enter($__internal_b4bed0875d5edb12fa43fa0611bbc89624a761c5cf713500bb10955955c776ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31d800ba7e9a14f6b840882620ac5eda18ffe308446455563b6770627cc01853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d800ba7e9a14f6b840882620ac5eda18ffe308446455563b6770627cc01853->enter($__internal_31d800ba7e9a14f6b840882620ac5eda18ffe308446455563b6770627cc01853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_31d800ba7e9a14f6b840882620ac5eda18ffe308446455563b6770627cc01853->leave($__internal_31d800ba7e9a14f6b840882620ac5eda18ffe308446455563b6770627cc01853_prof);

        
        $__internal_b4bed0875d5edb12fa43fa0611bbc89624a761c5cf713500bb10955955c776ba->leave($__internal_b4bed0875d5edb12fa43fa0611bbc89624a761c5cf713500bb10955955c776ba_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_52f4be94d23d8710ca16d69ec32aed4ad0f541f4e67d2aac5460023876b852fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f4be94d23d8710ca16d69ec32aed4ad0f541f4e67d2aac5460023876b852fe->enter($__internal_52f4be94d23d8710ca16d69ec32aed4ad0f541f4e67d2aac5460023876b852fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_f3e93b4c7fb8ea85a4c916028d834eb235471189eb6357c90401637abb56f2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e93b4c7fb8ea85a4c916028d834eb235471189eb6357c90401637abb56f2c6->enter($__internal_f3e93b4c7fb8ea85a4c916028d834eb235471189eb6357c90401637abb56f2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_f3e93b4c7fb8ea85a4c916028d834eb235471189eb6357c90401637abb56f2c6->leave($__internal_f3e93b4c7fb8ea85a4c916028d834eb235471189eb6357c90401637abb56f2c6_prof);

        
        $__internal_52f4be94d23d8710ca16d69ec32aed4ad0f541f4e67d2aac5460023876b852fe->leave($__internal_52f4be94d23d8710ca16d69ec32aed4ad0f541f4e67d2aac5460023876b852fe_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_35cb90f2e0f96edd80456599b3fa98f42528e9dacfbde134ccecb9cb682679b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cb90f2e0f96edd80456599b3fa98f42528e9dacfbde134ccecb9cb682679b4->enter($__internal_35cb90f2e0f96edd80456599b3fa98f42528e9dacfbde134ccecb9cb682679b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9ea5157a01ef358d093359e4375ecb8b0019efa5b730eb4ebdde0529a7b5ab0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea5157a01ef358d093359e4375ecb8b0019efa5b730eb4ebdde0529a7b5ab0b->enter($__internal_9ea5157a01ef358d093359e4375ecb8b0019efa5b730eb4ebdde0529a7b5ab0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_9ea5157a01ef358d093359e4375ecb8b0019efa5b730eb4ebdde0529a7b5ab0b->leave($__internal_9ea5157a01ef358d093359e4375ecb8b0019efa5b730eb4ebdde0529a7b5ab0b_prof);

        
        $__internal_35cb90f2e0f96edd80456599b3fa98f42528e9dacfbde134ccecb9cb682679b4->leave($__internal_35cb90f2e0f96edd80456599b3fa98f42528e9dacfbde134ccecb9cb682679b4_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:aide.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:aide.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/aide.html.twig");
    }
}
