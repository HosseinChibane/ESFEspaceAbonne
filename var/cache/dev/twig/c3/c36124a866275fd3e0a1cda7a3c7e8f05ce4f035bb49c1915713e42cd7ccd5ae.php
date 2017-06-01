<?php

/* @ESFEspaceAbonne/back/mesParametres.html.twig */
class __TwigTemplate_68204178aa916c7c4f523107aaebadccfb1650d0ccd31d2f6499373d0fa93fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametres.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6792d5f8262d8337bb266f8f74a5ff70aa2ac0ba2c76303b3c0f5d275e4c210c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6792d5f8262d8337bb266f8f74a5ff70aa2ac0ba2c76303b3c0f5d275e4c210c->enter($__internal_6792d5f8262d8337bb266f8f74a5ff70aa2ac0ba2c76303b3c0f5d275e4c210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametres.html.twig"));

        $__internal_46badf49f5dff1d9c73eb53b1f82edc0f548a7e759e89e2804bbe59be72712be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46badf49f5dff1d9c73eb53b1f82edc0f548a7e759e89e2804bbe59be72712be->enter($__internal_46badf49f5dff1d9c73eb53b1f82edc0f548a7e759e89e2804bbe59be72712be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6792d5f8262d8337bb266f8f74a5ff70aa2ac0ba2c76303b3c0f5d275e4c210c->leave($__internal_6792d5f8262d8337bb266f8f74a5ff70aa2ac0ba2c76303b3c0f5d275e4c210c_prof);

        
        $__internal_46badf49f5dff1d9c73eb53b1f82edc0f548a7e759e89e2804bbe59be72712be->leave($__internal_46badf49f5dff1d9c73eb53b1f82edc0f548a7e759e89e2804bbe59be72712be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3608f492d8e914d2d9487cad009183c7a1e1a23f0917857dd4d90a40bfe1910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3608f492d8e914d2d9487cad009183c7a1e1a23f0917857dd4d90a40bfe1910->enter($__internal_a3608f492d8e914d2d9487cad009183c7a1e1a23f0917857dd4d90a40bfe1910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e41b635179147618493d7db8c92682a82487be70f3e2130d9ff662f625d28de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e41b635179147618493d7db8c92682a82487be70f3e2130d9ff662f625d28de->enter($__internal_2e41b635179147618493d7db8c92682a82487be70f3e2130d9ff662f625d28de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2e41b635179147618493d7db8c92682a82487be70f3e2130d9ff662f625d28de->leave($__internal_2e41b635179147618493d7db8c92682a82487be70f3e2130d9ff662f625d28de_prof);

        
        $__internal_a3608f492d8e914d2d9487cad009183c7a1e1a23f0917857dd4d90a40bfe1910->leave($__internal_a3608f492d8e914d2d9487cad009183c7a1e1a23f0917857dd4d90a40bfe1910_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_8a18fdd8ac0772ba7dba370c83331ef81a230237f2f2e6438140464aad2deddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a18fdd8ac0772ba7dba370c83331ef81a230237f2f2e6438140464aad2deddf->enter($__internal_8a18fdd8ac0772ba7dba370c83331ef81a230237f2f2e6438140464aad2deddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_1c6777c3307a17137b694cc4aafe2841f24f557730cdbd4cbbb2c00c02082c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6777c3307a17137b694cc4aafe2841f24f557730cdbd4cbbb2c00c02082c22->enter($__internal_1c6777c3307a17137b694cc4aafe2841f24f557730cdbd4cbbb2c00c02082c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <!-- Mes Parametres -->
  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  
  ";
        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 12
            echo "    <div class=\"alert alert-error\">
      ";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    </div>
  ";
        }
        // line 16
        echo "
  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
       ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
       ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit"), "html", null, true);
        echo "\" />
      </div>
      ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>            
  </div>      
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

  </div>
</div>
";
        
        $__internal_1c6777c3307a17137b694cc4aafe2841f24f557730cdbd4cbbb2c00c02082c22->leave($__internal_1c6777c3307a17137b694cc4aafe2841f24f557730cdbd4cbbb2c00c02082c22_prof);

        
        $__internal_8a18fdd8ac0772ba7dba370c83331ef81a230237f2f2e6438140464aad2deddf->leave($__internal_8a18fdd8ac0772ba7dba370c83331ef81a230237f2f2e6438140464aad2deddf_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  121 => 29,  115 => 26,  110 => 24,  105 => 22,  101 => 21,  97 => 20,  91 => 16,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block Content %} 
  <!-- Mes Parametres -->
  {{ form_start(form) }}
  
  {% if not form.vars.valid %}
    <div class=\"alert alert-error\">
      {{ form_errors(form) }}
    </div>
  {% endif %}

  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        {{dump(form)}}
       {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
       {{ form_widget(form) }}
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'change_password.submit'|trans }}\" />
      </div>
      {{ form_end(form) }}
    </div>            
  </div>      
  {{ form_end(form) }}
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{dump(form)}}
    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}

  </div>
</div>
{% endblock %}", "@ESFEspaceAbonne/back/mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametres.html.twig");
    }
}
