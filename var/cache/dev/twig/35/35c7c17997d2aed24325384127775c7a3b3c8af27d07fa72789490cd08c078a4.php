<?php

/* @ESFEspaceAbonne/back/mesParametresMAIL.html.twig */
class __TwigTemplate_85bd9f57d72998fff84f211d7844fb0b42742bf6cc156caeb69aeb1376a1e212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", 1);
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
        $__internal_230bdfe1a7d828b1d8c3087798e6fc2db31ab4402886507dd14c8adf2ad6e1f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230bdfe1a7d828b1d8c3087798e6fc2db31ab4402886507dd14c8adf2ad6e1f3->enter($__internal_230bdfe1a7d828b1d8c3087798e6fc2db31ab4402886507dd14c8adf2ad6e1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $__internal_0c58b648f0dfa15942c3ef690cbfc76f7691535330edd9d59f9163269370f87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c58b648f0dfa15942c3ef690cbfc76f7691535330edd9d59f9163269370f87b->enter($__internal_0c58b648f0dfa15942c3ef690cbfc76f7691535330edd9d59f9163269370f87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_230bdfe1a7d828b1d8c3087798e6fc2db31ab4402886507dd14c8adf2ad6e1f3->leave($__internal_230bdfe1a7d828b1d8c3087798e6fc2db31ab4402886507dd14c8adf2ad6e1f3_prof);

        
        $__internal_0c58b648f0dfa15942c3ef690cbfc76f7691535330edd9d59f9163269370f87b->leave($__internal_0c58b648f0dfa15942c3ef690cbfc76f7691535330edd9d59f9163269370f87b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d786ea7e720e8832cc6a999b10d41e568aac28560f533699f370089d124ad17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d786ea7e720e8832cc6a999b10d41e568aac28560f533699f370089d124ad17d->enter($__internal_d786ea7e720e8832cc6a999b10d41e568aac28560f533699f370089d124ad17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f3e8a5a3bfea767b2edea96160a0f94a195cf1b318f12b96e32966ed9cea64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3e8a5a3bfea767b2edea96160a0f94a195cf1b318f12b96e32966ed9cea64d->enter($__internal_1f3e8a5a3bfea767b2edea96160a0f94a195cf1b318f12b96e32966ed9cea64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1f3e8a5a3bfea767b2edea96160a0f94a195cf1b318f12b96e32966ed9cea64d->leave($__internal_1f3e8a5a3bfea767b2edea96160a0f94a195cf1b318f12b96e32966ed9cea64d_prof);

        
        $__internal_d786ea7e720e8832cc6a999b10d41e568aac28560f533699f370089d124ad17d->leave($__internal_d786ea7e720e8832cc6a999b10d41e568aac28560f533699f370089d124ad17d_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_448454caa9d77778a4cad9829a0160ffdda6b3a84bcc975b923dd0fca9b08d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448454caa9d77778a4cad9829a0160ffdda6b3a84bcc975b923dd0fca9b08d99->enter($__internal_448454caa9d77778a4cad9829a0160ffdda6b3a84bcc975b923dd0fca9b08d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a00b9651969fdbd762d8fb9ff13a4b87e25ae6f1ac6ea85806f0fed59946c10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00b9651969fdbd762d8fb9ff13a4b87e25ae6f1ac6ea85806f0fed59946c10f->enter($__internal_a00b9651969fdbd762d8fb9ff13a4b87e25ae6f1ac6ea85806f0fed59946c10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_a00b9651969fdbd762d8fb9ff13a4b87e25ae6f1ac6ea85806f0fed59946c10f->leave($__internal_a00b9651969fdbd762d8fb9ff13a4b87e25ae6f1ac6ea85806f0fed59946c10f_prof);

        
        $__internal_448454caa9d77778a4cad9829a0160ffdda6b3a84bcc975b923dd0fca9b08d99->leave($__internal_448454caa9d77778a4cad9829a0160ffdda6b3a84bcc975b923dd0fca9b08d99_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_fb52a5cd43d50bf0b3e58ecbe182be7b867dd1c67ec5c17df793870447c50f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb52a5cd43d50bf0b3e58ecbe182be7b867dd1c67ec5c17df793870447c50f03->enter($__internal_fb52a5cd43d50bf0b3e58ecbe182be7b867dd1c67ec5c17df793870447c50f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b321d8eaca8c9138a298f8549707ce4bdabae059f0f95dbaa4fd746d6ad86b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b321d8eaca8c9138a298f8549707ce4bdabae059f0f95dbaa4fd746d6ad86b9f->enter($__internal_b321d8eaca8c9138a298f8549707ce4bdabae059f0f95dbaa4fd746d6ad86b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 


<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 31
        echo "    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>

";
        
        $__internal_b321d8eaca8c9138a298f8549707ce4bdabae059f0f95dbaa4fd746d6ad86b9f->leave($__internal_b321d8eaca8c9138a298f8549707ce4bdabae059f0f95dbaa4fd746d6ad86b9f_prof);

        
        $__internal_fb52a5cd43d50bf0b3e58ecbe182be7b867dd1c67ec5c17df793870447c50f03->leave($__internal_fb52a5cd43d50bf0b3e58ecbe182be7b867dd1c67ec5c17df793870447c50f03_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  130 => 31,  125 => 28,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block Content %} 


<!-- Mes Parametres -->
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'profile.edit.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>
</div>

{% endblock %}", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametresMAIL.html.twig");
    }
}
